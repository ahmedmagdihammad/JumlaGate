<?php

namespace App\Http\Controllers\Dashboard;

use App\Dashboard\Tag;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TagController extends Controller
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
            $tags = Tag::all();

            return response()->json($tags);

        }
        return view('dashboard.tags.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.tags.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = new Tag();
        $rules = $rules->tagRules;

        $this->validate($request, $rules);

        Tag::create([
            'name_en' => $request['name_en'],
            'name_ar' => $request['name_ar'],
        ]);

        return  redirect()->route('dashboard.tags.index')->with('success','Admin has been added successfully !');
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tag = Tag::find($id);

        return view('dashboard.tags.show',compact('tag'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tag = Tag::find($id);

        return view('dashboard.tags.edit',compact('tag'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Dashboard\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $rules = new Tag();
        $rules = $rules->tagRules;

        $rules['name_en'] = $rules['name_en'] . ',id,' . $id;
        $rules['name_ar'] = $rules['name_ar'] . ',id,' . $id;

        $this->validate($request, $rules);

        $tag = Tag::find($id);

        $tag->update([
            'name_en' => $request['name_en'],
            'name_ar' => $request['name_ar'],
        ]);

        return  redirect()->route('dashboard.tags.index')->with('success','Tag has been updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Dashboard\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        if($request->ajax())
        {
            Tag::find($id)->destroy($id);
        }
    }
}
