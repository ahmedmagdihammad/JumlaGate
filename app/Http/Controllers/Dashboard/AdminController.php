<?php

namespace App\Http\Controllers\Dashboard;

use App\Enums\UserType;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(Request $request)
    {
        if ($request->ajax())
        {
            $admins = User::where('type',UserType::Admin)->get();

            return response()->json($admins);

        }

        return view('dashboard.admins.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.admins.create');
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
            'type' => UserType::Admin,
            'email' => $request['email'],
            'address' => $request['address'],
            'phone'   => $request['phone'],
            'password' => Hash::make($request['password']),
        ]);

        return  redirect()->route('dashboard.admins.index')->with('success','New Tag has been added successfully !');
    }


    public function show($id)
    {
        $admin = User::find($id);

        return view('dashboard.admins.show',compact('admin'));
    }


    public function edit($id)
    {
        $admin = User::find($id);

        return view('dashboard.admins.edit',compact('admin'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Admin  $admin
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

        $admin = User::find($id);

        $admin->update([
            'name' => $request['name'],
            'email' => $request['email'],
            'address' => $request['address'],
            'phone'   => $request['phone'],
        ]);

        if ($request['password'] != null)
        {
            $rules['password'] = 'required | string | min:8 | confirmed';
            $this->validate($request, $rules);
            $admin->update(['password' => Hash::make($request['password'])]);
        }

        return  redirect()->route('dashboard.admins.index')->with('success','admin\'s info has been updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Admin  $admin
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
