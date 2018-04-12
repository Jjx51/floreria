<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class My_Array extends Model
{
    protected $table = 'arrays';

    protected $fillable = ['Codigo','Nombre','imagen','precio'];

    public function products(){
        return $this->belongsToMany('App\Product','array_products','array_id','product_id')->withPivot('Cantidad');
    } 

    public function ordenes(){
        return $this->belongsToMany('App\Order','array_orders','array_id','order_id')->withPivot('Cantidad','pendientes','user_id','status_id');
    } 

    public function ordenes2(){
        return $this -> hasMany('App\ArrayOrder','array_id','id');
    }

    public function action()
    {
        return $this->morphMany('App\Actions', 'actionable');
    }


}
