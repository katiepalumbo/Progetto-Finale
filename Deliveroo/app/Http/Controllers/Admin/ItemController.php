<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use App\Item;
use App\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Item::all();

        return view('admin.items.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('admin.items.create', compact('categories', 'tags'));
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
                'category_id' => 'nullable|exists:categories,id',
                'tags' => 'nullable|exists:tags,id',
                'price' => 'required',
                'description' => 'nullable',
                'image' => 'nullable|max:2048|'

                

            ]
        );

        $data = $request->all();

        
        
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

        $data['slug'] = $slug;

        $post = new Item();

        $post->fill($data);

        $post->save();

        $post->tags()->sync($data['tags']);

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
        return view('admin.items.show', compact('item'));
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

        return view('admin.items.edit', compact('item', 'categories', 'tags'));
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
                'category_id' => 'nullable|exists:categories,id',
                'tags' => 'nullable|exists:tags,id',
                'price' => 'required',
                'description' => 'nullable',
                'image' => 'nullable|max:2048|mimes:jpeg,jpg,png,bmp,gif,svg',

                

            ]
        );

        $data = $request->all();

        if (isset($data['image'])) {

            if ($item->image) {
                Storage::delete($item->image);
            }

            $cover_path = Storage::put('post_covers', $data['image']);
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
