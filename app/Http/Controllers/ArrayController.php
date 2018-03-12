<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ArrayStoreRequest;
use App\Http\Requests\ArrayUpdateRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use App\My_Array;
use App\User;
use App\StatusArray;
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
        //->where('category_id','1')
        $flores = Product::orderBy('NombreProducto','ASC')->where('category_id',1)->get();
        $tallos = Product::orderBy('NombreProducto','ASC')->where('category_id',2)->get();
        $rollos = Product::orderBy('NombreProducto','ASC')->where('category_id',3)->get();
        $bases = Product::orderBy('NombreProducto','ASC')->where('category_id',4)->get();
        $papels = Product::orderBy('NombreProducto','ASC')->where('category_id',5)->get();
        $listones = Product::orderBy('NombreProducto','ASC')->where('category_id',6)->get();
        $extras = Product::orderBy('NombreProducto','ASC')->where('category_id',7)->get();
        $array = new My_Array;
        return view ('ArrayCRUD.create',compact('array','flores','tallos','rollos','bases','papels','listones','extras'));
    }

    public function store(ArrayStoreRequest $request)
    {
        
        $array = My_Array::create($request->all());
      
        if($request->flores != 0){
            foreach ($request->flores as $flore){
                $array->products()->attach($flore,['Cantidad'=>$request->Cantidad[$flore]]);
            }
        }

        if($request->tallos != 0){
            foreach ($request->tallos as $tallo){
                $array->products()->attach($tallo,['Cantidad'=>$request->Cantidad[$tallo]]);
            }
        }

        if($request->rollos != 0){
            foreach ($request->rollos as $rollo){
                $array->products()->attach($rollo,['Cantidad'=>$request->Cantidad[$rollo]]);
            }
        }

        if($request->bases != 0){
            foreach ($request->bases as $base){
                $array->products()->attach($base,['Cantidad'=>$request->Cantidad[$base]]);
            }
        }

        if($request->papels != 0){
            foreach ($request->papels as $papel){
                $array->products()->attach($papel,['Cantidad'=>$request->Cantidad[$papel]]);
            }
        }

        if($request->listones != 0){
            foreach ($request->listones as $listone){
                $array->products()->attach($listone,['Cantidad'=>$request->Cantidad[$listone]]);
            }
        }

        if($request->extras != 0){
            foreach ($request->extras as $extra){
                $array->products()->attach($extra,['Cantidad'=>$request->Cantidad[$extra]]);
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
        $productos = Product::orderBy('NombreProducto','ASC')->where('category_id',1)->get();
        $array = My_Array::findOrFail($id);
        return view('ArrayCRUD.edit',compact('array','productos'));
    }


    public function update(ArrayUpdateRequest $request, $id)
    {
        $array = My_array::findOrFail($id);
        $borrar = $array->imagen;
        $array->fill($request->all())->save();
        if($request->productos != 0){
            foreach ($request->productos as $producto){
                //dd($producto);
                DB::insert('insert into array_products (array_id, product_id, Cantidad) values (?,?,?)', [$array->id,$producto, $request->Cantidad[$producto]]);
                //$array->products()->sync($producto);
            }
        }


        if ($request->file('imagen')){
            Storage::disk('public')->delete(substr($borrar,19));
            $path =Storage::disk('public')->put('img/arreglos', $request->file('imagen'));

            $array->fill(['imagen'=>asset($path)])->save();
        }
        return redirect("/Array");
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(file_exists(public_path(substr(My_array::findOrFail($id)->imagen,19)))){
            Storage::disk('public')->delete(substr(My_array::findOrFail($id)->imagen,19));
        }
        My_Array::destroy($id);
        return redirect('/Array');
    }
}
