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
            $product->precio = $request->precio;
            return view("/ProductCRUD.create",["product" => $product]);
        }
    }

    public function show(Product $product)
    {
        //
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        $categorias = CategoryProduct::pluck('name','id');
        return view('ProductCRUD.edit',compact('product','categorias'));
    }

    public function update(Request $request, $id)
    {
        $product = product::findOrFail($id);
        $product->NombreProducto = $request->NombreProducto;
        $product->category_id = $request->category_id;
        $product->Cantidad = $request->Cantidad;
        $product->merma = $request->merma;
        $product->precio = $request->precio;
        
        if ($product->save()) {
            return redirect("/Product");
        } else {
            return view("/ProductCRUD.edit",["product" => $product]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::destroy($id);
        return redirect('/Product');
    }
}
