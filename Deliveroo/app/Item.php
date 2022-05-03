<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{


    public function tags() {
        return $this->belongsToMany('App\Tag');
    }

    public function order() {
        return $this->belongsToMany('App\Order');
    }

    public function category() {
        return $this->belongsTo('App\Category');
    }

    public function user() {
        return $this->belongsTo('App\User');
    }
}
