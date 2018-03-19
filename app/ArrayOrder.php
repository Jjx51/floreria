<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ArrayOrder extends Model
{
    protected $fillable=['array_id','user_id','order_id','status_id','cantidad','pendientes'];

    protected $table = 'array_orders';

    public function florista(){
        return $this->belongsTo('App\User','user_id','id');
    }

    public function orden(){
        return $this -> belongsTo('App\Order','order_id','id');
    }

    public function status(){
        return $this -> belongsTo('App\StatusArray','status_id','id');
    }

    public function array(){
        return $this -> belongsTo('App\My_Array','array_id','id');
    }

    
}
