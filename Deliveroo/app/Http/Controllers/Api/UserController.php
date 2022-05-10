<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Type;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {

        $users = User::all();
        $types = Type::all();

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

    public function filter($element) {

        $users = User::all();

        $element = explode(",", $element);

        $usersArray = [];

        for($i=0; $i<count($element); $i++){

            foreach($users as $test){

                for($n=0; $n<count($test->types); $n++){

                    if($test->types[$n]->id == $element[$i]){

                        if(!in_array($test, $usersArray)){
                            $usersArray[] = $test;
                        }

                    }
                }
            }
        }

        return response()->json(
            [
                'results' => $usersArray,
                'success'=> true,
            ]
        );

    }

    public function show($slug)
    {

        $users = User::where('slug', $slug)->first();
        $types = [];

        foreach($users->$types as $element) {
            $types[] = $element->name;
        }


        if($users) {
            return response()->json(
                [
                    'allUsers' => $users,
                    'allTypes' => $types,
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
