<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\My_Array;
use App\Product;
use App\User;

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
        $producto = Product::all()->firstWhere('Codigo',$codigo);

        
        if($arreglo){
            //foreach ($arreglo->products as $product) {
            //    $idp = $product->id;
            //    $materialNecesario = $product->pivot->Cantidad;
            //    $existencia = Product::findOrFail($idp);
            //    if($existencia->Cantidad < $materialNecesario){
            //        return redirect()-> route('inicio')->with('danger','Falta '. $product->NombreProducto.' para realizar el arreglo:  "'.$arreglo->Nombre.'"');         
              //  }
            //}
            return view('home.index',compact('codigo'));    
        }
        if($producto){
            return view('home.index',compact('codigo')); 
        }
        return redirect()-> route('inicio')->with('danger','Codigo no enocontrado');
        
        
    }

    public function venta($codigo){
        $usuarios = User::all()->where('rol','user')->pluck('name','id');
        $arreglo = My_Array::all()->firstWhere('Codigo',$codigo);
        $producto = Product::all()->firstWhere('Codigo',$codigo);
        return view('home.venta',compact('arreglo','usuarios','producto'));
    }

    public function mostrador($codigo){
        $usuarios = User::all()->where('rol','user')->pluck('name','id');
        $arreglo = My_Array::all()->firstWhere('Codigo',$codigo);
        $producto = Product::all()->firstWhere('Codigo',$codigo);
        return view('home.mostrador',compact('arreglo','usuarios','producto'));
    }

    public function pedido($codigo){
        $usuarios = User::all()->where('rol','user')->pluck('name','id');
        $arreglo = My_Array::all()->firstWhere('Codigo',$codigo);
        $producto = Product::all()->firstWhere('Codigo',$codigo);
        return view('home.pedido',compact('arreglo','usuarios','producto'));
    }



}
