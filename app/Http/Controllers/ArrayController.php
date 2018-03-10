<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ArrayStoreRequest;
use App\Http\Requests\ArrayUpdateRequest;
use Illuminate\Support\Facades\Storage;
use App\My_Array;
use App\User;
use App\StatusArray;
use App\Product;
use App\ArrayProduct;

class ArrayController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $arrays = My_Array::orderBy('id','DESC')->paginate(3);
        return view('ArrayCRUD.index',compact('arrays'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //->where('category_id','1')
        $products = Product::orderBy('NombreProducto','ACD')->pluck('NombreProducto','id');
        $array = new My_Array;
        return view ('ArrayCRUD.create',compact('array','products'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ArrayStoreRequest $request)
    {
        $array = My_Array::create($request->all());
        if ($request->file('imagen')){
            $path =Storage::disk('public')->put('img/arreglos', $request->file('imagen'));
            $array->fill(['imagen'=>asset($path)])->save();

        }
        return redirect("/Array");
        
        
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $products = Product::orderBy('NombreProducto','ACD')->pluck('NombreProducto','id');
        $array = My_Array::findOrFail($id);
        return view('ArrayCRUD.edit',compact('array','products'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ArrayUpdateRequest $request, $id)
    {
        $array = My_array::findOrFail($id);
        $borrar = $array->imagen;
        $array->fill($request->all())->save();


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
