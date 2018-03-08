<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\My_Array;
use App\User;
use App\StatusArray;

class ArrayController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $arrays = My_Array::orderBy('id','DESC')->paginate(4);
        return view('ArrayCRUD.index',compact('arrays'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $array = new My_Array;
        return view ('ArrayCRUD.create',compact('array'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (My_array::create($request->all())) {
            return redirect("/Array");
        } else {
            //configurar mensaje de que la categoria no se guardo en el sistema
            $array  = new My_Array;
            $array->NombreProducto = $request->NombreProducto;
            $array->Codigo = $request->Codigo;
            $array->imagen = $request->imagen;
            return view("/Array.create",["array" => $array]);
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
