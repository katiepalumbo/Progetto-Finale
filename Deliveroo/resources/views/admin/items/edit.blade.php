 @extends('admin.layouts.base')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">

                <h1>Modifica piatto</h1>

                <form method="POST" action={{route('admin.items.update', $item->id)}} enctype="multipart/form-data">

                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="user_id">Stai modificando un piatto per:**</label>
                        <select class="form-control" id="user_id" name="user_id">

                            <option value="">Nessun user selezionato...</option>
                            {{-- @foreach ($users as $user) --}}
                            <option {{(old('user_id', $item->user_id) == Auth::user()->id) ? 'selected': ''}} value="{{ Auth::user()->id }}">{{Auth::user()->name}} al ristorante: {{Auth::user()->restaurant_name}}</option>
                            {{-- @endforeach --}}

                        </select>
                    </div>

                    @if ($item->image)
                        <h4>Immagine</h4>
                        <img class="img-thumbnail" src="{{asset('storage/' . $item->image)}}" alt="{{$item->item_name}}">
                    @endif

                    <div class="form-group">
                        <label for="image">Carica nuova immagine del piatto</label>
                        <input class="form-control" type="file" name="image" id="image">
                    </div>

                    <div class="form-group">
                        <label for="category_id">Categoria</label>
                        <select class="form-control" id="category_id" name="category_id">

                            <option value="">Nessuna categoria...</option>

                            @foreach ($categories as $category)
                                <option {{(old('category_id', $item->category_id) == $category->id) ? 'selected': ''}} value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach

                        </select>
                    </div>

                    <div class="form-group">
                      <label for="item_name">Titolo</label>
                      <input type="text" class="form-control" id="item_name" name="item_name" value="{{old('item_name', $item->item_name)}}">
                    </div>

                    <div class="form-group">
                        <label for="content">Descrizione</label>
                        <textarea class="form-control" id="description" rows="10" name="description">{{old('description', $item->description)}}</textarea>
                    </div>

                    @foreach ($tags as $tag)

                        @if ($errors->any())
                            <div class="custom-control custom-checkbox">
                                <input name="tags[]" type="checkbox" class="custom-control-input" id="tag_{{$tag->id}}" value={{$tag->id}} {{in_array($tag->id, old('tags'))?'checked':''}}>
                                <label class="custom-control-label" for="tag_{{$tag->id}}">{{$tag->name}}</label>
                            </div>
                        @else
                            <div class="custom-control custom-checkbox">
                                <input name="tags[]" type="checkbox" class="custom-control-input" id="tag_{{$tag->id}}" value={{$tag->id}} {{$item->tags->contains($tag->id)?'checked':''}}  >
                                <label class="custom-control-label" for="tag_{{$tag->id}}">{{$tag->name}}</label>
                            </div>
                        @endif

                    @endforeach

                    <div class="mb-3 form-group">
                        <label for="price" class="ms_title_price">Prezzo</label>
                            <input type="number" step="0.01" name="price" class="p-1 form-control col-3 col-md-3 col-lg-2 ms_form_price @error('price') is-invalid @enderror" min="0" max="999" 
                            value="{{old('price', $item->price)}}"> 
                            
                    </div>
                    @error('price')
                    <div class="mt-0 alert alert-danger">
                        {{$message}}
                    </div>
                    @enderror

                    {{-- visibile --}}
                    <div class="mt-4 mb-1 form-group">
                        <span>Vuoi rendere visibile questo piatto nel menù?</span>

                        <span class="ms_input_yes">
                            <input id="visible" {{(old("visible") == "yes") ? "checked" : ""}} value="yes" type="radio" name="visible" checked>
                            <label class="visible" for="visible">
                                SI
                            </label>
                        </span>

                        <span class="ms_input_no">
                            <input id="not-visible" {{(old("visible") == "no") ? "checked" : ""}} value="no" type="radio" name="visible">
                            <label class="not-visible" for="not-visible">
                                NO
                            </label>
                        </span>

                        @error('visible')
                        <div class="alert alert-danger">
                            {{$message}}
                        </div>
                        @enderror
                    </div>


                    <button type="submit" class="btn btn-primary">Salva</button>

                </form>

            </div>
        </div>
    </div>
@endsection
