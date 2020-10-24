<?php

namespace App\Http\Controllers\Dashboard;

use App\Dashboard\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
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
            $categories = Category::all();

            return response()->json($categories);

        }
        return view('dashboard.categories.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = new Category();
        $rules = $rules->categoryRules;

        $this->validate($request, $rules);

        Category::create([
            'name_en' => $request['name_en'],
            'name_ar' => $request['name_ar'],
        ]);

        return  redirect()->route('dashboard.categories.index')->with('success','New Category has been added successfully !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Dashboard\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $category = Category::find($id);

        return view('dashboard.categories.show',compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Dashboard\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::find($id);

        return view('dashboard.categories.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Dashboard\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $rules = new Category();
        $rules = $rules->categoryRules;

        $rules['name_en'] = $rules['name_en'] . ',id,' . $id;
        $rules['name_ar'] = $rules['name_ar'] . ',id,' . $id;

        $this->validate($request, $rules);

        $tag = Category::find($id);

        $tag->update([
            'name_en' => $request['name_en'],
            'name_ar' => $request['name_ar'],
        ]);

        return  redirect()->route('dashboard.categories.index')->with('success','Category has been updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Dashboard\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        if($request->ajax())
        {
            Category::find($id)->destroy($id);
        }
    }
}
