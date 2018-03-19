<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StatusOrder extends Model
{
    protected $table = 'status_orders';

    public $timestamps = false;

    public function ordenes(){
        return $this -> hasMany('App\Order','status_id','id');
    }
}
