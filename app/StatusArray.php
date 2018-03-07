<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StatusArray extends Model
{
    public function arrays(){
        return $this -> hasMany('App\My_Array','status_id','id');
    }
}
