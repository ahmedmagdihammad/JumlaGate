<?php

namespace App\Http\Controllers\Dashboard;

use App\Company;
use App\Price;
use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('dashboard.products.index',compact('products'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $companies =  Company::all();
        return view('dashboard.products.create',compact('companies'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $rules  = new Product();
        $rules  = $rules->productRules;
        $prices = $request['prices'];

        $this->validate($request, $rules);
        $product = Product::create([
            'company_id'   => $request['company_id'],
            'category_id'  => $request['category_id'],
            'name'      => $request['name'],
            'prod_desc'     => $request['prod_desc'],
            'shipping_pay_desc'   => $request['shipping_pay_desc'],
            'min_quantity'     => $request['min_quantity'],
        ]);

        foreach ( $prices as $price)
        {
            Price::create([
                'product_id'=> $product->id,
                'from' => $price['from'],
                'price'  => $price['price'],
                'discount'  => $price['discount'],
                'to'  => $price['to'],

            ]);
        }


        return  view('dashboard.products.images',compact('product'));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }

    public function uploadImages(Request $request)
    {
        $product_id = $request['product_id'];

        $product = Product::find($product_id);

        $imageName = time().'.'. $request['file']->getClientOriginalName() .$request['file']->getClientOriginalExtension();

        $request['file']->move(public_path('product_images'), $imageName);

        if ( $product->img_1 == null )
        {
            $product->img_1 = $imageName;

        }else if ( $product->img_2 == null )
        {
            $product->img_2 = $imageName;

        }else if ( $product->img_3 == null )
        {
            $product->img_3 = $imageName;

        }else if ( $product->img_4 == null )
        {
            $product->img_4 = $imageName;

        }else if ( $product->img_5 == null )
        {
            $product->img_5 = $imageName;

        }else if ( $product->img_6 == null )
        {
            $product->img_6 = $imageName;

        }else if ( $product->img_7 == null )
        {
            $product->img_7 = $imageName;

        }else if ( $product->img_8 == null )
        {
            $product->img_8 = $imageName;

        }else if ( $product->img_9 == null )
        {
            $product->img_9 = $imageName;

        }else if ( $product->img_10 == null )
        {
            $product->img_10 = $imageName;
        }

        $product->save();
    }

}
