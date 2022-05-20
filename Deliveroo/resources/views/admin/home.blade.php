@extends('admin.layouts.base')

@section('content')

<div class="container-fluid dashboard">

    <div class="row ms_banner pt-3 ps-3">

        <div class="text-white">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <h1 class="">
                Benvenuto "{{ Auth::user()->restaurant_name }}"
            </h1>
            <h5>
                {{ Auth::user()->email }}
            </h5>
        </div>
    </div>
</div>
<div class="container mt-2">

    <div class="row justify-content-center">
        <div class="col-md-6 col-lg-6">
            <div class="card">
                <div class="card-header fs-4">{{ __('Dettagli Utente') }}</div>

                {{-- card utente --}}
                <div class="card-body">
                  <ul class="list-group list-group-flush">
                      <li class="list-group-item my-2 card"><span class="fw-bold">Nome: </span> {{$user->name}} {{$user->user_last_name}}</li>
                      <li class="list-group-item my-2 card"><span class="fw-bold">Email: </span> {{$user->email}}</li>
                      <li class="list-group-item my-2 card"><span class="fw-bold">Cellulare: </span> {{$user->user_cell_number}}</li>
                      <li class="list-group-item my-2 card"><span class="fw-bold">P.Iva: </span> {{$user->user_tax_code}}</li>
                      <li class="list-group-item my-2 card"><span class="fw-bold">Sei registrato dal: </span> {{$user->created_at}}</li>
                  </ul>
                </div>
              </div>
            </div>


            {{-- card ristorante --}}
            <div class="col-sm-6 col-lg-6">
              <div class="card">
                <div class="card-header fs-4">{{ __('Dettagli Ristorante') }}</div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item my-2 card"><span class="fw-bold">Nome: </span> {{$user->restaurant_name}}</li>
                        <li class="list-group-item my-2 card"><span class="fw-bold">Indirizzo: </span> {{$user->user_street}}</li>
                        <li class="list-group-item my-2 card"><span class="fw-bold">Città: </span> {{$user->user_city}}</li>
                        <li class="list-group-item my-2 card"><span class="fw-bold">Codice CAP: </span> {{$user->user_zip_code}}</li>
                    </ul>
                  <h5 class="card-title mt-2">Dettagli Piatti</h5>
                  <ul class="list-group list-group-flush">

                    <li class="list-group-item d-flex justify-content-between align-items-center">
                      Piatti visibili nel menù:
                      <span class="badge bg-primary rounded-pill">15</span>
                    </li>

                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Piatti non visibili nel menù:
                        <span class="badge bg-primary rounded-pill">4</span>
                    </li>
                  </ul>
                  
                </div>
                
            
              </div>

            </div>

<div class="row">
    {{-- colonna di sinistra img user --}}
    <div class="col-sm-12 col-md-6 mb-5">

        <h2 class="px-3 card-title">La tua Immagine</h2>
        <div class="card p-4">
            <div class="card-img">

                @if (Auth::user()->user_cover)
                    <img class="img-fluid" src="{{Auth::user()->user_cover}}" alt=""
                        height="500px" width="600px">
                @else
                    <img class="img-fluid" src="{{ asset('/images/noimg.png') }}" alt=""
                        height="500px" width="600px">
                @endif
            </div>

            {{-- <form action="" method="POST" enctype="multipart/form-data">
                @csrf
                @method('POST')

                <div class="form-group">
                    <br>

                    <label for="icon"></label>
                    <input type="file" name="icon" id="icon" class="mb-3 ml-1" placeholder=""
                        aria-describedby="helpId">

                    <br>
                    <input type="submit" class="button" value="Carica">

                    <a href="" class="button">Elimina</a>
                    <small id="helpId" class="text-muted"></small>
                </div>
            </form> --}}

        </div>
    </div>

    {{-- colonna di destra con miei piatti --}}
    <div class="col-sm-12 col-md-6 mb-5">

        <a href="{{ route('admin.items.index') }}" class="text-decoration-none">
            <div class="card lista piatti">
                <div class="card-body text-center lista">
                    <h2 class="mt-3 ms_bg-Opaco text-white">I TUOI PIATTI</h2>
                </div>
            </div>
        </a>

    </div>
</div>
@endsection
