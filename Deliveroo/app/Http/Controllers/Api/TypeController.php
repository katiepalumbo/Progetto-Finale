<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Type;
use Illuminate\Http\Request;

class TypeController extends Controller
{
    public function index() {
        
        $types = Type::all();

        if($types){
            return response()->json([
                'success' => true,
                'results' => $types
            ]);
        }else{
            return response()->json([
                'success' => false,
                'results' => []
            ]);
        }

    }

    public function show($slug)
    {
        $types = Type::where('slug', '=', $slug)->with(['users'])->first();

        /* $types = Type::all(); */

        if($types){
            return response()->json([
                'success' => true,
                'results' => $types
            ]);
        }else{
            return response()->json([
                'success' => false,
                'results' => []
            ]);
        }
        
    }
}


