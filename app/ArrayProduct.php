<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ArrayProduct extends Model
{
    protected $fillable=['array_id','product_id','Cantidad'];

    protected $table = 'array_products';
}