@extends('admin.layouts.base')

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('FATTO') }}
                </div>
            </div>
        </div>
    </div>
</div> --}}

<h1 class="ms_green">Testo VERDE</h1>
<div class="container-fluid">

    <div class="row ms_banner">

        <div class="p-3 my-1 ml-3 text-white ms_banner">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <h1>
                Benvenuto "{{ Auth::user()->restaurant_name }}""
            </h1>
            <h4>
                {{ Auth::user()->email }}
            </h4>
        </div>
    </div>
</div>
<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-6 col-lg-5">
            <div class="card">
                <div class="card-header fs-4 ms_banner">{{ __('Dettagli Utente') }}</div>

                {{-- card utente --}}
                <div class="card-body">
                  <ul class="list-group list-group-flush">
                      <li class="list-group-item my-2 card"><span class="fw-bold">Nome: </span> {{$user->name}} {{$user->user_last_name}}</li>
                      <li class="list-group-item my-2 card"><span class="fw-bold">Email: </span> {{$user->email}}</li>
                      <li class="list-group-item my-2 card"><span class="fw-bold">Cellulare: </span> {{$user->user_cell_number}}</li>
                      <li class="list-group-item my-2 card"><span class="fw-bold">Codice CAP: </span> {{$user->user_zip_code}}</li>
                      <li class="list-group-item my-2 card"><span class="fw-bold">P.Iva: </span> {{$user->user_tax_code}}</li>
                      <li class="list-group-item my-2 card"><span class="fw-bold">Sei registrato dal: </span> {{$user->created_at}}</li>
                  </ul>
                </div>
              </div>
            </div>


            {{-- card ristorante --}}
            <div class="col-sm-6 col-lg-5">
              <div class="card">
                <div class="card-header fs-4 ms_banner">{{ __('Dettagli Ristorante') }}</div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item my-2 card"><span class="fw-bold">Nome: </span> {{$user->restaurant_name}}</li>
                        <li class="list-group-item my-2 card"><span class="fw-bold">Indirizzo: </span> {{$user->user_street}}</li>
                        <li class="list-group-item my-2 card"><span class="fw-bold">Città: </span> {{$user->user_city}}</li>
                        <li class="list-group-item my-2 card">
                            <span class="fw-bold">Categories: </span>

                        </li>
                    </ul>
                  <h5 class="card-title mt-2">Dettagli Piatti</h5>
                  <ul class="list-group list-group-flush">

                    <li class="list-group-item d-flex justify-content-between align-items-center">
                      Piatti visibili nel menù:
                      <span class="badge bg-primary rounded-pill">8</span>
                    </li>

                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Piatti non visibili nel menù:
                        <span class="badge bg-primary rounded-pill">4</span>
                      </li>
                  </ul>
                  
                </div>
              </div>

        </div>
    </div>

</div>


<div class="row mb-4">

    <div class="col-sm-6">
        {{-- <a href="{{ route('food.index') }}"> --}}

        <div class="mb-4 card lista piatti">
            <h2>I tuoi piatti</h2>
            <p>Thumbnail Piatti</p>
        </div>
    </div>

    <div class="col-sm-6">
        {{-- <a href="{{ route('orders.index') }}"> --}}

            <div class="mb-4 card lista ordini">
                <h2>Ordini ricevuti</h2>
            </div>
    </div>
</div>

<div class="row">
    {{-- colonna di sinistra img user --}}
    <div class="col-sm-12 col-md-6 mb-5">

        <h2 class="px-3 card-title">La tua Immagine</h2>
        <div class="card p-4">
            <div class="card-img">

                @if (Auth::user()->image)
                    <img class="img-fluid" src="{{ asset('storage/icon/' . Auth::user()->user_cover) }}" alt=""
                        height="400px" width="400px">
                @else
                    <img class="img-fluid" src="{{ asset('/img/noimg.png') }}" alt=""
                        height="400px" width="400px">
                @endif
            </div>

            <form action="" method="POST" enctype="multipart/form-data">
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
            </form>

        </div>
    </div>

    {{-- colonna di destra con info user --}}
    <div class="col-sm-12 col-md-6 mb-5">
        {{-- <div class=""> --}}

            <h2 class="px-3 card-title">Le tue Informazioni</h2>


            <ul class="list-group list-group-flush">
                <li class="my-2 card list-group-item">
                    <strong>Nome: </strong> {{ Auth::user()->restaurant_name }}
                </li>
                <li class="my-2 card list-group-item">
                    <strong>Indirizzo: </strong> {{ Auth::user()->user_street }}
                </li>
                <li class="my-2 card list-group-item">
                    <strong>Telefono: </strong> {{ Auth::user()->user_cell_number }}
                </li>
                <li class="my-2 card list-group-item">
                    <strong>Partita IVA: </strong> {{ Auth::user()->user_tax_code }}
                </li>
                {{-- <ul class="my-2 card list-group list-group-flush"> --}}
                <li class="my-2 card list-group-item">
                    <strong>Tipologie: </strong>
                    {{-- @foreach (Auth::user()->typologies as $typ)
                        {{ $typ->name }}

                    @endforeach --}}
                </li>

            </ul>

        {{-- </div> --}}
    </div>
</div>
@endsection
