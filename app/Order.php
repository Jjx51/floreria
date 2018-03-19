<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable=[
        'array_id',          
        'cantidad',
        'NombreCliente',
        'NombreDestinatario',
        'DirecionEntrega',
        'Referencia',
        'Phone',
        'Costo',
        'Mensaje',
        'Prioridad',
        'FechaEntrega',
        'HoraEntrega',
        'Bloque',
        'Florista',
        'Arreglo_status',
        'Repartidor',
        'Order_status',
        'Entrega',
        'NotaEntrega'
    ];

    protected $table = 'orders';
    
    public function arreglo(){
        return $this -> belongsTo('App\My_Array','array_id','id');
    }
    
    public function my_arrays(){
        return $this->belongsToMany('App\My_Array','array_orders','array_id','order_id')->withPivot('Cantidad','pendientes','user_id','status_id');
    } 


    public function repartidor(){
        return $this->belongsTo('App\User','user_id','id');
    }

    public function status(){
        return $this -> belongsTo('App\StatusOrder','status_id','id');
    }

    public function ordenes(){
        return $this -> hasMany('App\ArrayOrder','order_id','id');
    }
}
