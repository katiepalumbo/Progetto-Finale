<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

use App\User;
use Illuminate\Support\Str;

class UserController extends Controller
{
    public function index() {

        $users = User::with(['type'])->get();

        /* $new_item = new User();

        $users = User::with(['type'])->get();

        $slug = Str::slug($users['restaurant_name']);

        $counter = 1;

        while(User::where('slug', $slug)->first()){
            $slug = Str::slug($users['restaurant_name']) . '-' . $counter;
            $counter++;

        }

        $users['slug'] = $slug;

        /* $new_item->fill($users); */

        /* $new_item->save(); */ 
        // $users = User::all();
        // $types = Type::all();

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

    public function show($slug)
    {

        $users = User::where('slug', $slug)->first();

        if($users) {
            return response()->json(
                [
                    'results' => $users,
                    'success' => true,
                ]
            );
        } else {
            return response()->json(
                [
                    'results' => 'errore',
                    'success' => false,
                ]
            );
        }

        return response();
    }
}


