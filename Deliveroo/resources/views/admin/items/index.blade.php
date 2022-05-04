@extends('admin.layouts.base')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <table class="table">

                    <a href="{{route('admin.items.create')}}" class="btn btn-warning mb-3">Crea nuovo piatto</a>

                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nome Piatto</th>
                        <th scope="col">Descrizione</th>
                        <th scope="col">Slug</th>
                        <th scope="col">Categoria</th>
                        <th scope="col">Opzioni</th>
                        <th scope="col">Visibile</th>
                        <th scope="col">Prezzo</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($items as $item)
                            <tr>
                                <td>{{$item->id}}</td>
                                <td><a href="{{route('admin.items.show', $item->id)}}">{{$item->item_name}}</a></td>
                                <td>{{substr($item->description, 0, 30)}}</td>
                                <td>{{$item->slug}}</td>
                                <td>{{isset($item->category)?$item->category->name:'N.D.'}}</td>
                                <td>€{{$item->price}}&nbsp</td>

                                @if ($item->visible==1)
                                    <td>yes</td>
                                @else
                                    <td>no</td>
                                @endif

                                <td class="d-flex">
                                    <a href="{{route('admin.items.show', $item->id)}}" class="btn btn-primary m-2">Visualizza</a>
                                    <a href="{{route('admin.items.edit', $item->id)}}" class="btn btn-secondary m-2">Modifica</a>

                                    <form method="POST" action="{{route('admin.items.destroy', $item->id)}}">

                                            @csrf
                                            @method('DELETE')

                                            <button type="submit" class="btn btn-danger m-2">
                                                Elimina
                                            </button>

                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
