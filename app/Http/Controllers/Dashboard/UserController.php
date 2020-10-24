<?php

namespace App\Http\Controllers\Dashboard;

use App\Enums\UserType;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax())
        {
            $users = User::where('type',UserType::User)->get();

            return response()->json($users);

        }

        return view('dashboard.traders.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.traders.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $rules = new User();
        $rules = $rules->userRules;

        $this->validate($request, $rules);

        User::create([
            'name' => $request['name'],
            'type' => UserType::User,
            'email' => $request['email'],
            'address' => $request['address'],
            'phone'   => $request['phone'],
            'password' => Hash::make($request['password']),
        ]);

        return  redirect()->route('dashboard.traders.index')->with('success','Admin has been added successfully !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $trader = User::find($id);

        return view('dashboard.traders.show',compact('trader'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $trader = User::find($id);

        return view('dashboard.traders.edit',compact('trader'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rules = new User();
        $rules = $rules->userRules;

        $rules['email'] = $rules['email'] . ',id,' . $id;
        $rules['phone'] = $rules['phone'] . ',id,' . $id;
        $rules['password'] = 'nullable | string | min:8 | confirmed';

        $this->validate($request, $rules);

        $trader = User::find($id);

        $trader->update([
            'name' => $request['name'],
            'email' => $request['email'],
            'address' => $request['address'],
            'phone'   => $request['phone'],
        ]);

        if ($request['password'] != null)
        {
            $rules['password'] = 'required | string | min:8 | confirmed';
            $this->validate($request, $rules);
            $trader->update(['password' => Hash::make($request['password'])]);
        }

        return  redirect()->route('dashboard.traders.index')->with('success','admin\'s info has been updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        if($request->ajax())
        {
            User::find($id)->destroy($id);
        }
    }
}
