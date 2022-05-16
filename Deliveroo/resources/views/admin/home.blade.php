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

<div class="container">
    <div class="">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        <h4>Bentornato {{$user->name}}!</h4>
        <span>Ultimo accesso: (inserire carbon)</span>
    </div>

    <div class="row justify-content-center">
        {{-- card utente --}}
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">{{ __('Info Utente') }}</div>

                
                <div class="card-body">
                  <h5 class="card-title">Dettagli Utente</h5>
                  <ul class="list-group">
                      <li class="list-group-item"><span class="fw-bold">Nome: </span> {{$user->name}} {{$user->user_last_name}}</li>
                      <li class="list-group-item"><span class="fw-bold">Email: </span> {{$user->email}}</li>
                      <li class="list-group-item"><span class="fw-bold">Cellulare: </span> {{$user->user_cell_number}}</li>
                      <li class="list-group-item"><span class="fw-bold">Codice CAP: </span> {{$user->user_zip_code}}</li>
                      <li class="list-group-item"><span class="fw-bold">P.Iva: </span> {{$user->user_tax_code}}</li>
                      <br>
                      <li class="list-group-item"><span class="fw-bold">Sei registrato dal: </span> {{$user->created_at}}</li>
                  </ul>
                </div>
              </div>
            </div>


            {{-- card ristorante --}}
            <div class="col-sm-6">
              <div class="card">
                <div class="card-header">{{ __('Info Ristorante') }}</div>
                <div class="card-body">
                    <h5 class="card-title">Dettagli Ristorante</h5>
                    <ul class="list-group">
                        <li class="list-group-item"><span class="fw-bold">Nome: </span> {{$user->restaurant_name}}</li>
                        <li class="list-group-item"><span class="fw-bold">Indirizzo: </span> {{$user->user_street}}</li>
                        <li class="list-group-item"><span class="fw-bold">Città: </span> {{$user->user_city}}</li>
                        <li class="list-group-item">
                            <span class="fw-bold">Categories: </span>
                                {{-- @foreach ($category->name as $category)
                                    <span class="badge badge-primary">{{$category->id->name}}</span>
                                @endforeach --}}
                        </li>
                    </ul>
                  <h5 class="card-title mt-2">Dettagli Piatti</h5>
                  <ul class="list-group">

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
@endsection
