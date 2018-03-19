<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StatusArray extends Model
{
    public $timestamps = false;

    public function ordenes(){
        return $this -> hasMany('App\ArrayOrder','status_id','id');
    }
}
