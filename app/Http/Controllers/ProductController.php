<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use App\Product;
use App\CategoryProduct;
use App\My_Array;
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
        if ($product = Product::create($request->all())) {
            if ($request->file('imagen')){
                $path =Storage::disk('public')->put('img/productos', $request->file('imagen'));
                $product->fill(['imagen'=>asset($path)])->save();
            }
            return redirect("/Product");
        } else {
            //configurar mensaje de que la categoria no se guardo en el sistema
            $product  = new Product;
            $product->Nombre = $request->Nombre;
            $product->Codigo = $request->Codigo;
            $product->category_id = $request->category_id;
            $product->precio = $request->precio;
            return view("/ProductCRUD.create",["product" => $product]);
        }
    }

    public function show($id)
    {
        $producto = Product::findOrFail($id);
        return view('ProductCRUD.show',compact('producto'));
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
        $borrar = $product->imagen;
        $product->fill($request->all())->save();

        if ($request->file('imagen')){
            Storage::disk('public')->delete(substr($borrar,19));
            $path =Storage::disk('public')->put('img/productos', $request->file('imagen'));
            $product->fill(['imagen'=>asset($path)])->save();
        }
        
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
        if(file_exists(public_path(substr(Product::findOrFail($id)->imagen,19)))){
            Storage::disk('public')->delete(substr(Product::findOrFail($id)->imagen,19));
        }

        Product::destroy($id);
        return redirect('/Product');
    }

    public function agregar($id, $agregar)
    {
        $product = Product::findOrFail($id);
        $product->fill(['Cantidad'=>$product->Cantidad+$agregar]);
        $product->save();
        return redirect('/Product');
        //return redirect()-> route('Product.index')->with('info','se aumento el inventario');

    }

    public function descontar($id)
    {
        
        $arreglo = My_Array::findOrFail($id);
        foreach ($arreglo->products as $product) {
            $idp = $product->id;
            $descuento = $product->pivot->Cantidad;
            $descontarA = Product::findOrFail($idp);
            $descontarA->fill(['Cantidad'=>$descontarA->Cantidad-$descuento]);
            $descontarA->save();

        }
        
        return redirect('/Product');
        //return redirect()-> route('Product.index')->with('danger','El inventario a cambiado');
    }

}
