<?php

namespace App\Http\Controllers;

use App\Product;
use App\CategoryProduct;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index()
    {
        $products = Product::all();
        return view('ProductCRUD.index',compact('products'));
    }

    public function create()
    {
        $product = new Product;
        $categorias = CategoryProduct::pluck('name','id');
        return view ('ProductCRUD.create',compact('product','categorias'));
    }


    public function store(Request $request)
    {
        if (Product::create($request->all())) {
            return redirect("/Product");
        } else {
            //configurar mensaje de que la categoria no se guardo en el sistema
            $product  = new Product;
            $product->NombreProducto = $request->NombreProducto;
            $product->category_id = $request->category_id;
            $product->Cantidad = $request->Cantidad;
            $product->merma = 0;
            return view("/Product.create",["product" => $product]);
        }
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
}
