@extends('admin.layouts.base')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">

                <h1>Modifica piatto</h1>

                <form method="POST" action={{route('admin.items.update', $item->id)}} enctype="multipart/form-data">

                    @csrf

                    <div class="form-group d-none">
                        <label for="user_id">Stai creando un nuovo piatto per:*</label>
                        <select class="form-control" id="user_id" name="user_id">

                            <option {{(old('user_id') == Auth::user()->id) ? 'selected': ''}} value="{{ Auth::user()->id }}" selected>{{Auth::user()->name}} al ristorante: {{Auth::user()->restaurant_name}}</option>

                        </select>
                    </div>
                    <h4 class="mt-3">Gli elementi contrassegnati dal simbolo * sono campi obbligatori</h4>



                    @method('PUT')

                    @if ($item->image)
                        <h4>Immagine del piatto</h4>

                        @if ($item->image)
                            <img class="img-fluid img_piatto" src="{{asset('storage/' . $item->image)}}" alt="{{$item->item_name}}">
                        @else
                            <img class="img-fluid img_piatto" src="{{$item->image}}" alt="{{$item->item_name}}">
                        @endif
                        {{-- <img class="img-thumbnail" src="{{$item->image}}" alt="{{$item->item_name}}"> --}}
                    @endif

                    <div class="form-group">
                        <label for="image">Carica nuova immagine del piatto *</label>
                        <input class="form-control  @error('image') is-invalid @enderror" type="file" name="image" id="image" name="image">
                    </div>

                    <div class="form-group">
                        <label for="category_id">Categoria del piatto *</label>
                        <select class="form-control @error('category_id') is-invalid @enderror" id="category_id" name="category_id" required>

                            <option value="">Nessuna categoria...</option>

                            @foreach ($categories as $category)
                                <option {{(old('category_id', $item->category_id) == $category->id) ? 'selected': ''}} value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach

                        </select>
                    </div>

                    


                    <div class="form-group">
                      <label for="item_name">Nome del piatto *</label>
                      <input type="text" class="form-control @error('item_name') is-invalid @enderror" id="item_name" name="item_name" value="{{old('item_name', $item->item_name)}}" required>
                    </div>

                    <div class="form-group">
                        <label for="content">Descrizione del piatto *</label>
                        <textarea class="form-control" id="description" rows="8" minlength="2" maxlength="255" name="description">{{old('description', $item->description)}}</textarea>
                    </div>

                    <label>Seleziona tipologie e/o allergeni (opzionale)</label>
                    @foreach ($tags as $tag)

                        @if ($errors->any())
                            <div class="custom-control custom-checkbox">
                                <input name="tags[]" type="checkbox" class="custom-control-input" id="tag_{{$tag->id}}" value={{$tag->id}} {{in_array($tag->id, old('tags'))?'checked':''}}>
                                <label class="custom-control-label" for="tag_{{$tag->id}}">{{$tag->name}}</label>
                            </div>
                        @else
                            <div class="custom-control custom-checkbox">
                                <input name="tags[]" type="checkbox" class="custom-control-input" id="tag_{{$tag->id}}" value={{$tag->id}} {{$item->tags->contains($tag->id)?'checked':''}}>
                                <label class="custom-control-label" for="tag_{{$tag->id}}">{{$tag->name}}</label>
                            </div>
                        @endif

                    @endforeach

                    <div class="mb-3 form-group">
                        <label for="price" class="ms_title_price">Prezzo del piatto *</label>
                            <input type="number" step="0.01" name="price" class="p-1 form-control col-3 col-md-3 col-lg-2 ms_form_price @error('price') is-invalid @enderror" min="0" max="999" value="{{old('price', $item->price)}}" required>
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

                    <a href="{{ url()->previous() }}" class="btn btn-primary m-2">Annulla modifica</a>
                    <button type="submit" class="btn btn-secondary">Salva modifica</button>

                </form>

            </div>
        </div>
    </div>
@endsection
