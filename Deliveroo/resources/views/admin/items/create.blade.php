@extends('admin.layouts.base')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">

                <h1>Crea un nuovo piatto</h1>

                <form method="POST" action={{route('admin.items.store')}} enctype="multipart/form-data">

                    @csrf

                    <div class="form-group">
                        <label for="image">Cover</label>
                        <input class="form-control" type="file" name="image" id="image">
                    </div>

                    <div class="form-group">
                        <label for="category_id">Categoria</label>
                        <select class="form-control" id="category_id" name="category_id">

                            <option value="">Nessuna categoria...</option>

                            @foreach ($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach

                        </select>
                    </div>

                    <div class="form-group">
                      <label for="item_name">Nome piatto</label>
                      <input type="text" class="form-control" id="item_name" name="item_name" value="{{old('item_name')}}">
                    </div>

                    <div class="form-group">
                        <label for="description">Descrizione</label>
                        <textarea class="form-control" id="description" rows="10" name="description" value="{{old('description')}}"></textarea>
                    </div>

                    @foreach ($tags as $tag)
                        <div class="custom-control custom-checkbox">
                            <input name="tags[]" type="checkbox" class="custom-control-input" id="tag_{{$tag->id}}" value={{$tag->id}} {{in_array($tag->id, old('tags', []))?'checked':''}}>
                            <label class="custom-control-label" for="tag_{{$tag->id}}">{{$tag->name}}</label>
                        </div>
                    @endforeach

                    <div class="mb-3 form-group">
                        <label for="price" class="ms_title_price">Prezzo</label>
                            <input type="number" step="0.01" name="price" class="p-1 form-control col-3 col-md-3 col-lg-2 ms_form_price @error('price') is-invalid @enderror ">
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
                            <input id="visible" {{(old("visible") == "yes") ? "checked" : ""}} value="yes" type="radio" name="visible">
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
