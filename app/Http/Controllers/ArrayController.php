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
            $array->NombreAttangements = $request->NombreAttangements;
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
        $array = My_Array::findOrFail($id);
        return view('ArrayCRUD.edit',compact('array'));
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
        $array = My_array::findOrFail($id);
        $array->NombreAttangements = $request->NombreAttangements;
        $array->Codigo = $request->Codigo;
        $array->imagen = $request->imagen;
        if ($array->save()) {
            return redirect("/Array");
        } else {
            return view("/ArrayCRUD.edit",["array" => $array]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        My_Array::destroy($id);
        return redirect('/Array');
    }
}
