<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    protected $fillable=['Nombre','Codigo','category_id','precio','imagen'];

    public function Category(){
        return $this -> belongsTo('App\CategoryProduct','category_id','id');
    }

    public function my_arrays(){
        return $this->belongsToMany('App\My_Array','array_products','array_id','product_id')->withPivot('Cantidad');
    } 

    public function action()
    {
        return $this->morphMany('App\Actions', 'actionable');
    }

}
