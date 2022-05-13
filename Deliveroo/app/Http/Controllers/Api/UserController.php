<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Item;
use App\User;

class UserController extends Controller
{
    public function index() {

        $users = User::with(['type','items'])->get();

        return response()->json(
            [
                'results' => $users,
                'success'=> true
            ]
        );

    }

    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */

    public function filter($filter) {

        $filter = explode(",", $filter);
        $usersArrey = [];


        $users = User::with(['type'])->get();


        for($i = 0; $i<count($filter); $i++) {
            foreach($users as $user) {
                foreach($user->type as $type) {
                    if ($type->id == $filter[$i]) {

                        if(!in_array($user, $usersArrey)){
                            $usersArrey[] = $user;
                        }
                    }
                }
            }
        }

        return response()->json(
            [
                'results' => $usersArrey,
                'success'=> true,
            ]
        );

    }

    public function cart($slug, $cart) {

        $cart = explode(",", $cart);
        $itemsArrey = [];
        $price = [];
        $price2 = [];


        $items = Item::all();


        for($i = 0; $i<count($cart); $i++) {
            foreach($items as $item) {
                if ($item->id == $cart[$i]) {

                    $price[] = $item->price;

                    if(!in_array($item, $itemsArrey)){
                        $itemsArrey[] = $item;
                    }
                }
            }
        }

        for($i = 0; $i<count($price); $i++) {

            $num = $price[$i];

            $int = (int)$num;

            $price2[] = $int;


            $float = (float)$num;
        }

        return response()->json(
            [
                'results' => $itemsArrey,
                'price' => $price2,
                'success'=> true,
            ]
        );

    }

    public function show($slug)
    {
        $user = User::where('slug', $slug)->first();
        $items = Item::where('user_id', $user->id)->with(['tags','category'])->get();


        if ($user) {
            return response()->json(
                [
                    'users' => $user,
                    'items' => $items,
                    'success' => true
                ]
            );
        } else {
            return response()->json(
                [
                    'results' => 'Nessun risultato trovato',
                    'success' => false
                ]
            );
        }
    }
}
