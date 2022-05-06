<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Item extends Model
{
    use SoftDeletes;

    protected $fillable = ['item_name','category_id','price','description','slug','image','user_id'];


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
