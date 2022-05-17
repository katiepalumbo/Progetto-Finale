<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Item;
use Illuminate\Http\Request;

class itemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Item::with(['user','tags','category'])->paginate(10);

        $items->each(function($item) {
            if ($item->image) {
                $item->image = url('storage/'.$item->image);
            } else {
                $item->image = url('img/fallback_img.jpg');
            }
        });

        return response()->json(
            [
                'results' => $items,
                'success' => true
            ]
        );

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    public function filtcart($slug, $filtcart){

        $filtcart = explode(",", $filtcart);
        $aaaaaaArrey = [];


        $items = Item::all();


        for($i = 0; $i<count($filtcart); $i++) {
            foreach($items as $item) {
                if ($item->id == $filtcart[$i]) {

                    if(!in_array($item, $aaaaaaArrey)){
                        $aaaaaaArrey[] = $item;
                    }
                }
            }
        }

        return response()->json(
            [
                'results' => $aaaaaaArrey,
                'success'=> true,
            ]
        );

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $item = Item::where('slug', '=', $slug)->with(['category','tags','user'])->first();

        if ($item->image) {
            $item->image = url('storage/'.$item->image);
        } else {
            $item->image = url('img/fallback_img.jpg');
        }

        if($item) {
            return response()->json(
                [
                    'result'=> $item,
                    'success'=> true
                ]

            );
        }else {
            return response()->json(
                [
                    'result'=> 'nessuna corrispondenza',
                    'success'=> false
                ]

            );
        }

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
