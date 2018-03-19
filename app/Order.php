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
        'Orden_status',
        'Entrega',
        'NotaEntrega'
    ];

    protected $table = 'orders';
    
    public function arreglo(){
        return $this -> belongsTo('App\My_Array','array_id','id');
    }
    
    public function florista(){
        return $this->belongsTo('App\User','Florista','id');
    }

    public function repartidor(){
        return $this->belongsTo('App\User','Repartidor','id');
    }

    public function Orden_status(){
        return $this -> belongsTo('App\StatusOrder','Orden_status','id');
    }

    public function Array_status(){
        return $this -> belongsTo('App\StatusArray','Arreglo_status','id');
    }
}
