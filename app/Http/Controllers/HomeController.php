<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {
    //     $tipoAlerta='success';
    //     $titulo= 'transaccion exitosa';
    //     $mensaje= 'El producto ha sido registrado';
    //     return view('home.index',compact('titulo','mensaje','tipoAlerta'));
    // }

    public function venta($id){
        return view('home.venta',compact('id'));
    }

    public function mostrador($id){
        return view('home.mostrador',compact('id'));
    }

    public function pedido($id){
        return view('home.pedido',compact('id'));
    }



}
