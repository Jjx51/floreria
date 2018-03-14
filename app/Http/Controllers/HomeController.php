<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\My_Array;

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
     public function index(){
        return view('home.index');
    }

    public function show(Request $request){
        $codigo = $request->input('codigo');
        $arreglo = My_Array::all()->firstWhere('Codigo',$codigo);

        if($arreglo){
            return view('home.index',compact('codigo'));    
        }
        return redirect()-> route('inicio')->with('danger','Codigo no enocontrado');
        
        
    }

    public function venta($codigo){
        $arreglo = My_Array::all()->firstWhere('Codigo',$codigo);
        return view('home.venta',compact('arreglo'));
    }

    public function mostrador($codigo){
        $arreglo = My_Array::all()->firstWhere('Codigo',$codigo);
        return view('home.mostrador',compact('arreglo'));
    }

    public function pedido($codigo){
        $arreglo = My_Array::all()->firstWhere('Codigo',$codigo);
        return view('home.pedido',compact('arreglo'));
    }



}
