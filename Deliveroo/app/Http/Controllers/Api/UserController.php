<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
        
        $users = User::all();

        return response()->json(
            [
                'results' => $users,
                'success'=> true
            ]
        );

    }

    public function show()
    {

        $users = User::all();

        return response()->json(
            [
                'results' => $users,
                'success' => true
            ]
        );
        
    }
}
