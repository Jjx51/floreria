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

}
