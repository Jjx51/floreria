<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\CategoryArray;

class My_Array extends Model
{
    protected $table = 'arrays';

    protected $fillable = ['Nombre','user_id','status_id','Codigo','NombreAttangements','imagen'];

    public function user()
    {
        return $this -> belongsTo('App\User','user_id','id');
    }


}
