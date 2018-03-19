<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ArrayOrder;
use App\Order;
use App\My_Array;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('order.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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

    public function Venta(Request $request)
    {

        $arreglo= My_Array::findOrFail($request->array_id);

        $order = Order::create(['Costo'=>$arreglo->precio,'user_id'=>$request->user_id]);
        
        $array_order = ArrayOrder::create([
            'array_id'      => $arreglo->id ,
            'order_id'      => $order->id ,
            'user_id'       => $request->user_id ,
            'status_id'     => 1 ,
            'cantidad'      => $request->cantidad ,
            'pendientes'    => $request->cantidad
        ]);
        
        return redirect('/inicio');
        //return redirect()-> route('Product.index')->with('danger','El inventario a cambiado');
    }

}
