<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\CategoryArray;

class My_Array extends Model
{
    protected $table = 'arrays';

    protected $fillable = ['Codigo','Nombre','imagen'];

}
