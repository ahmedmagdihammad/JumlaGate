<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Company;
use App\CompanyCategory;
use App\Product;
use App\Category;

class AllCategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = CompanyCategory::all();
        return view('frontend.categories', compact('categories'));
    }

    public function showcategory($id)
    {
        $category = Category::find($id);
        return view('frontend.showCategory', compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $company = Company::find($id);
        $categories = CompanyCategory::where(['company_id' => $company->id])->get();
        $productes = Product::where('company_id', $company->id)->get();
        
        return view('frontend.category', compact('categories', 'id', 'productes'));
    }

    public function serchCatgeory(Request $request)
    {
        $id = $request->factoryid;
        $categories = CompanyCategory::where(['company_id' => $request->factoryid])->get();
        $productes = Product::where('company_id', $request->factoryid)->where('category_id', $request->categoryid)->get();

        return view('frontend.category', compact('categories', 'id', 'productes'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
