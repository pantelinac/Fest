<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Festival extends Model
{
    protected $table = 'festival';

    public function visitors()
    {
        return $this->hasMany('App\Visitor');
    }
}
