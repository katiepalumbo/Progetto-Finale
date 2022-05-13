<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use App\Item;
use App\Tag;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\URL;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$items = Item::all();
        $items = Item::where('user_id', auth()->user()->id)->get();

        return view('admin.items.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
        $categories = Category::all();
        $tags = Tag::all();
        return view('admin.items.create', compact('categories', 'tags','users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'item_name' => 'required|min:2',
                'category_id' => 'required|exists:categories,id',
                'tags' => 'nullable|exists:tags,id',
                'price' => 'required|numeric',
                'description' => 'nullable',
                'image' => 'nullable|max:2048|',
                "visible" => "required",
            ]

        );

        $data = $request->all();
        $new_item = new Item();


        if (isset($data['image'])) {
            $cover_path = Storage::put('image', $data['image']);
            $data['image'] = $cover_path;
        }


        $slug = Str::slug($data['item_name']);

        $counter = 1;

        while(Item::where('slug', $slug)->first()){
            $slug = Str::slug($data['item_name']) . '-' . $counter;
            $counter++;

        }

        if($data["visible"]=='no') {
            $new_item->visible = false;
        } else if($data["visible"]=='yes')  {
            $new_item->visible = true;
        }
            $data['slug'] = $slug;

            $new_item->fill($data);

            $new_item->save();

        $new_item->tags()->sync($data['tags']);

        return redirect()->route('admin.items.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Item $item)
    {
        //return view('admin.items.show', compact('item'));
        //return URL::signedRoute('admin.items.show', ['user_id' => $item->user_id]);
        if($item->user_id != auth()->id()) {
            // maybe a redirect with some info here???
            return view('admin.error.403error');
            //return abort(404);
        } else {
            return view('admin.items.show', compact('item'));
        }
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Item $item)
    {
        $categories = Category::all();
        $tags = Tag::all();

        if($item->user_id != auth()->id()) {
            // maybe a redirect with some info here???
            // return abort(404);
            return view('admin.error.403error');
        } else {
            // allow portfolio edit
            return view('admin.items.edit', compact('item', 'categories', 'tags'));
        }

        //return view('admin.items.edit', compact('item', 'categories', 'tags'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Item $item)
    {
        $request->validate(
            [
                'item_name' => 'required|min:2',
                'category_id' => 'required|exists:categories,id',
                'tags' => 'nullable|exists:tags,id',
                'price' => 'required',
                'description' => 'nullable',
                'image' => 'nullable|max:2048|mimes:jpeg,jpg,png,bmp,gif,svg',
                "visible" => "required",
            ]
        );

        $data = $request->all();

        if (isset($data['image'])) {

            if ($item->image) {
                Storage::delete($item->image);
            }

            $cover_path = Storage::put('image', $data['image']);
            $data['image'] = $cover_path;

        }
        $slug = Str::slug($data['item_name']);

        if ($item->slug != $slug) {
            $counter = 1;

            while(Item::where('slug', $slug)->first()){
                $slug = Str::slug($data['item_name']) . '-' . $counter;
                $counter++;
            }
            $data['slug'] = $slug;

        }

        if($data["visible"]=='no') {
            $item->visible = false;
        } else if($data["visible"]=='yes')  {
            $item->visible = true;
        }

        $item->update($data);
        $item->save();

        if (isset($data['tags'])) {
            $item->tags()->sync($data['tags']);
        }

        return redirect()->route('admin.items.index');




    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Item $item)
    {
        if ($item->image) {
            Storage::delete($item->image);
        }

        $item->delete();

        return redirect()->route('admin.items.index');
    }
}
