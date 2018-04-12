<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actions extends Model
{
    protected $fillable=['cantidad','Codigo','actionable_id','actionable_type'];

    public function actionable()
    {
        return $this->morphTo();
    }

}
