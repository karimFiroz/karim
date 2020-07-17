<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{



            public function all_products(){
                    return view('pages.product.all_products');
                }

               public function product(){
                  $products=Product::orderBy('id','desc')->get();
                    return view('pages.product.product')->with('products',$products);
                }
    /*
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function products()
    {

        $products=Product::all();
        return view('pages.product.products')->with('products', $products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $product=new Product;
       $product->category_id = $request->category_id;
       $product->product_id = $request->product_id;
       $product->admin_id=$request->admin_id;
       $product->title = $request->title;
       $product->slug = $request->slug;
       $product->description = $request->description;
       $product->quantity = $request->quantity;
       $product->price = $request->price;
       $product->offer_price = $request->offer_price;
       $product->status = $request->status;
        $product->save();
        return redirect()->route('products');
        //Insert data into products table
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $product=Product::find($id);
        $product->delete();
        return redirect()->route('products');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product=Product::find($id);
        return view('pages.product.edit')->with('product',$product);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {   $product=Product::find($id);
        $product->category_id=$request->category_id;
        $product->product_id=$request->product_id;
        $product->admin_id=$request->admin_id;
        $product->title=$request->title;
        $product->slug=$request->slug;
        $product->description=$request->description;
        $product->quantity=$request->quantity;
        $product->price=$request->price;
        $product->offer_price=$request->offer_price;
        $product->status=$request->status;
         $product->save();
         return redirect()->route('products');

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
}
