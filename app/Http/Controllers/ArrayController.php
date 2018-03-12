<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ArrayStoreRequest;
use App\Http\Requests\ArrayUpdateRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use App\My_Array;
use App\User;
use App\CategoryProduct;
use App\Product;
use App\ArrayProduct;

class ArrayController extends Controller
{

    public function index()
    {
        $arrays = My_Array::orderBy('id','DESC')->paginate(3);
        return view('ArrayCRUD.index',compact('arrays'));
    }

    public function create()
    {
        $categorias = CategoryProduct::orderBy('name','ASC')->get();
        $array = new My_Array;
        return view ('ArrayCRUD.create',compact('array','categorias'));
    }

    public function store(ArrayStoreRequest $request)
    {
        $array = My_Array::create($request->all());
      
        if($request->productos != 0){
            foreach ($request->productos as $producto){
                $array->products()->attach($producto,['Cantidad'=>$request->Cantidad[$producto]]);
            }
        }


        if ($request->file('imagen')){
            $path =Storage::disk('public')->put('img/arreglos', $request->file('imagen'));
            $array->fill(['imagen'=>asset($path)])->save();

        }
        return redirect("/Array");
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $categorias = CategoryProduct::orderBy('name','ASC')->get();
        $array = My_Array::findOrFail($id);
        return view('ArrayCRUD.edit',compact('array','categorias'));
    }


    public function update(ArrayUpdateRequest $request, $id)
    {
        $array = My_array::findOrFail($id);
        $borrar = $array->imagen;
        $array->fill($request->all())->save();
        if($request->productos != 0){
            foreach ($request->productos as $producto){
                $array->products()->sync([]);
                $array->products()->attach($producto,['Cantidad'=>$request->Cantidad[$producto]]);
            }
        }


        if ($request->file('imagen')){
            Storage::disk('public')->delete(substr($borrar,19));
            $path =Storage::disk('public')->put('img/arreglos', $request->file('imagen'));

            $array->fill(['imagen'=>asset($path)])->save();
        }
        return redirect("/Array");
        
    }

    
    public function destroy($id)
    {
        if(file_exists(public_path(substr(My_array::findOrFail($id)->imagen,19)))){
            Storage::disk('public')->delete(substr(My_array::findOrFail($id)->imagen,19));
        }
        My_Array::destroy($id);
        return redirect('/Array');
    }
}
