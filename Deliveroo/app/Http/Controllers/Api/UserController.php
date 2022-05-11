<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

use App\User;


class UserController extends Controller
{
    public function index() {

        $users = User::with(['type'])->get();
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

    // public function getClientesPorRuta(Request $request) {
    //     $rutas = $request->input('rutas');
    //     $tipos = $request->input('tipos');

    //     // Code like this doesn't work
    //     $index = 0;
    //     $register = Ruta::where('CODIRUTA','=',$rutas[$index])->first();
    //   }

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



        // foreach($filter as $test) {

        //     $users = User::with(['type' == $test])->get();
        //     $usersArray[] = $users;
        // }


        // $tester = $request;



        // for($i=0; $i<count($filter); $i++){

        //     foreach($users as $user){

        //         for($n=0; $n<count($user->types); $n++){

        //             if($user->types[$n]->id == $filter[$i]){

        //                 if(!in_array($user, $usersArray)){
        //                     $usersArray[] = $user;
        //                 }
        //             }
        //         }
        //     }
        // }

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
