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

    public function create()
    {
        $CategoryProduct = new CategoryProduct;
        return view ('CategoryProduct.create',compact('CategoryProduct'));
    }

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


    public function show($id)
    {
        $nombre = CategoryProduct::findOrFail($id)->name;
        $productos = CategoryProduct::findOrFail($id)->Products;
        return view('CategoryProduct.show',compact('nombre','productos'));
    }


    public function edit($id)
    {
        $CategoryProduct = CategoryProduct::findOrFail($id);
        return view('CategoryProduct.edit',compact('CategoryProduct'));
    }


    public function update(Request $request, $id)
    {
        $CategoryProduct = CategoryProduct::findOrFail($id);
        $CategoryProduct->name = $request->name;
        
            if ($CategoryProduct->save()) {
                return redirect("/Categoryp");
            } else {
                return view("/CategoryProduct.edit",["CategoryProduct" => $CategoryProduct]);
            }
    }

    public function destroy($id)
    {
       
    }
}
