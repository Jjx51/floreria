<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CategoryProduct;

class CategoryProductController extends Controller
{

    public function index()
    {
        $categorias = CategoryProduct::all();
        return view('CategoryProduct.index', compact('categorias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $CategoryProduct = new CategoryProduct;
        return view ('CategoryProduct.create',compact('CategoryProduct'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (CategoryProduct::create($request->all())) {
            return redirect("/Categoryp");
        } else {
            //configurar mensaje de que la categoria no se guardo en el sistema
            $CategoryProduct  = new CategoryProduct;
            $CategoryProduct->name = $request->name;
            return view("/CategoryProduct.create",["CategoryProduct" => $CategoryProduct]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $nombre = CategoryProduct::find($id)->name;
        $productos = CategoryProduct::find($id)->Products;
        return view('CategoryProduct.show',compact('nombre','productos'));
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
