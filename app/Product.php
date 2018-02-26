<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    protected $fillable=['NombreProducto','category_id','Cantidad','merma'];

    public function Category(){
        return $this -> belongsTo('App\CategoryProduct','category_id','id');
    }
}
