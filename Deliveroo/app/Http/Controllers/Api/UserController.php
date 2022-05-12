<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

use App\User;
use Illuminate\Support\Str;

class UserController extends Controller
{
    public function index() {

        $users = User::with(['type'])->get();

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
        //$user = User::where('slug', $slug)->first();
        $user = User::all();
        $usersSlugArrey = [];

        foreach($user as $userx) {

            if ($userx->slug == $slug) {

                if(!in_array($userx, $usersSlugArrey)){
                    $usersSlugArrey[] = $userx;
                }
            }
        }

        if ($user) {
            return response()->json(
                [
                    'results' => $usersSlugArrey,
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
