<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Item;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function orderController($slug, $cart, $order)
    {

        $cart = explode(",", $cart);

        $plateItem = Item::all();
        $newElement = [];

        for ($i=0; $i<count($cart);$i++) {

            foreach ( $plateItem as $item) {

                if($item->id == $cart[$i]) {
                    $newElement[] = $item;

                }
    
            }
        

        }
        $new = new Item();
        $new->fill()


        return response()->json(
            [
                "success" => true,
                
            ]
        );
    }

}
