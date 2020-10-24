<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use App\Category;
use App\Company;

class AllProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productes = Product::all();
        $allProduct = Product::all();
        $categories = Category::all();
        $factories = Company::all();

        return view('frontend.products', compact('productes', 'allProduct', 'categories', 'factories'));
    }

    public function filterProduct(Request $request)
    {
        $allProduct = Product::all();
        $categories = Category::all();
        $factories = Company::all();

        if ( !empty($request->factoryid) && empty($request->categoryid) && empty($request->productid) ) {
            $productes = Product::where('company_id', $request->factoryid)->get();
            return view('frontend.products', compact('productes', 'allProduct', 'categories', 'factories'));

        }else if( empty($request->factoryid) && !empty($request->categoryid) && empty($request->productid) ){
            $productes = Product::where('category_id', $request->categoryid)->get();
            return view('frontend.products', compact('productes', 'allProduct', 'categories', 'factories'));

        }else if( empty($request->factoryid) && empty($request->categoryid) && !empty($request->productid) ){
            $productes = Product::where('id', $request->productid)->get();
            return view('frontend.products', compact('productes', 'allProduct', 'categories', 'factories'));

        }else if( !empty($request->factoryid) && !empty($request->categoryid) && empty($request->productid) ){
            $productes = Product::where('company_id', $request->factoryid)->where('category_id', $request->categoryid)->get();
            return view('frontend.products', compact('productes', 'allProduct', 'categories', 'factories'));

        }else if( !empty($request->factoryid) && empty($request->categoryid) && !empty($request->productid) ){
            $productes = Product::where('company_id', $request->factoryid)->where('id', $request->productid)->get();
            return view('frontend.products', compact('productes', 'allProduct', 'categories', 'factories'));

        }else if( empty($request->factoryid) && !empty($request->categoryid) && !empty($request->productid) ){
            $productes = Product::where('category_id', $request->categoryid)->where('id', $request->productid)->get();
            return view('frontend.products', compact('productes', 'allProduct', 'categories', 'factories'));
        }else if( !empty($request->factoryid) && !empty($request->categoryid) && !empty($request->productid) ){
            $productes = Product::where('company_id', $request->factoryid)->where('category_id', $request->categoryid)->where('id', $request->productid)->get();
            return view('frontend.products', compact('productes', 'allProduct', 'categories', 'factories'));
        }else{
            $productes = Product::get();
            return view('frontend.products', compact('productes', 'allProduct', 'categories', 'factories'));
        }
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
        $product = Product::find($id);
        return view('frontend.product', compact('product'));
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
