@extends('admin.layouts.base')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">

                <h1>Visualizza </h1>

                {{-- @if ($item->image)
                    <img class="img-fluid" src="{{asset('storage/' . $item->image)}}" alt="{{$item->item_name}}">
                @else
                     <img class="img-fluid" src="{{asset('img/fallback_img.jpg.png')}}" alt="{{$item->item_name}}">
                 
                @endif --}}

                <img class="img-fluid" src="{{asset('storage/' . $item->image)}}" alt="{{$item->item_name}}">

                <div><strong>Titolo </strong>{{$item->item_name}}</div>
                <div><strong>Descrizione </strong>{!! $item->description !!}</div>
                <div><strong>Slug </strong>{{$item->slug}}</div>
                <div><strong>Categoria </strong>{{$item->category['name']}}</div>
                <div><strong>Prezzo </strong>€{{$item->price}}</div>

                <div>
                    @foreach ($item->tags as $tag)
                        <span class="badge badge-primary">{{$tag->name}}</span>
                    @endforeach
                </div>
                <div class="d-flex">

                    <a href="{{ url()->previous() }}" class="btn btn-primary">Torna alla lista</a>
                    <a href="{{route('admin.items.edit', $item->id)}}" class="btn btn-secondary m-2">Modifica</a>
                </div>

                

            </div>
        </div>
    </div>
@endsection