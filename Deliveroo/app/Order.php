<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = "orders";

    protected $fillable = ["total_price", "client_street", "client_city", "client_zip_code", "client_email", "client_cell_number"];


    public function item() {
        return $this->belongsToMany('App\Item');
    }



    public function user(){
        return $this->belongsTo('App\User');
    }

}
