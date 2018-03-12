<?php

namespace App\Http\Controllers;

use App\ArrayProduct;
use App\My_Array;
use App\Product;
use App\CategoryProduct;

use Illuminate\Http\Request;

class ArrayProductController extends Controller
{

    public function index()
    {
        $arrayproducts = ArrayProduct::orderBy('array_id','ASC')->paginate(15);
        return view('ArrayProductCRUD.index',compact('arrayproducts'));
    }

    public function create()
    {
        $arrayproduct = new ArrayProduct;
        $products::all();
        return view ('ArrayProductCRUD.create',compact('arrayproduct','products'));
    }


    public function store(Request $request)
    {
        if (ArrayProduct::create($request->all())) {
            return redirect("/ArrayProduct");
        } else {
            //configurar mensaje de que la categoria no se guardo en el sistema
            $arrayproduct  = new ArrayProduct;
            $arrayproduct->NombreProducto = $request->NombreProducto;
            $arrayproduct->category_id = $request->category_id;
            $arrayproduct->Cantidad = $request->Cantidad;
            $arrayproduct->merma = 0;
            return view("/ArrayProductCRUD.create",["arrayproduct" => $arrayproduct]);
        }
    }

    public function show(Product $arrayproduct)
    {
        //
    }

    public function edit($id)
    {
        $arrayproduct = ArrayProduct::findOrFail($id);
        $categorias = CategoryProduct::pluck('name','id');
        return view('ArrayProductCRUD.edit',compact('arrayproduct','categorias'));
    }

    public function update(Request $request, $id)
    {
        $arrayproduct = arrayproduct::findOrFail($id);
        $arrayproduct->NombreProducto = $request->NombreProducto;
        $arrayproduct->category_id = $request->category_id;
        $arrayproduct->Cantidad = $request->Cantidad;
        $arrayproduct->merma = $request->merma;
        
        if ($arrayproduct->save()) {
            return redirect("/ArrayProduct");
        } else {
            return view("/ArrayProductCRUD.edit",["arrayproduct" => $arrayproduct]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $arrayproduct
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ArrayProduct::destroy($id);
        return redirect('/ArrayProduct');
    }
}
