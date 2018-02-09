<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Visitor extends Model
{
    protected $table = 'visitors';

    public function festival()
    {
        return $this->belongsTo('App\Festival');
    }
}
