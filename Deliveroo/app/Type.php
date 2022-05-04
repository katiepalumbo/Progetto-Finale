<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    protected $table = 'types';


    public function user() {
        return $this->belongsToMany('App\User');
    }
}
