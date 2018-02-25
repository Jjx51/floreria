<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoryProduct extends Model
{
    protected $fillable = ['name'];
    
    public function Products(){
        return $this -> hasMany('App\Product','category_id','id');
    }

}
