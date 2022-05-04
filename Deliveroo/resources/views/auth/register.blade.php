@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        {{-- name --}}
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        {{-- user_last_name --}}
                        <div class="form-group row">
                            <label for="user_last_name" class="col-md-4 col-form-label text-md-right">{{ __('Last Name') }}</label>

                            <div class="col-md-6">
                                <input id="user_last_name" type="text" class="form-control @error('user_last_name') is-invalid @enderror" name="user_last_name" value="{{ old('user_last_name') }}" required autocomplete="user_city" autofocus>

                                @error('user_last_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        {{-- email --}}
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        {{-- password --}}
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        {{-- password confirm --}}
                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        {{-- user_cell_number --}}
                        <div class="form-group row">
                            <label for="user_cell_number" class="col-md-4 col-form-label text-md-right">{{ __('Numero di telefono') }}</label>

                            <div class="col-md-6">
                                <input id="user_cell_number" type="number" class="form-control @error('user_cell_number') is-invalid @enderror" name="user_cell_number" value="{{ old('user_cell_number') }}" required autocomplete="user_cell_number" autofocus>

                                @error('user_cell_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        {{-- user_tax_code --}}
                        <div class="form-group row">
                            <label for="user_tax_code" class="col-md-4 col-form-label text-md-right">{{ __('Partita IVA') }}</label>

                            <div class="col-md-6">
                                <input id="user_tax_code" type="number" class="form-control @error('user_tax_code') is-invalid @enderror" name="user_tax_code" value="{{ old('user_tax_code') }}" required autocomplete="user_tax_code" autofocus>

                                @error('user_tax_code')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        {{-- user_street --}}
                        <div class="form-group row">
                            <label for="user_street" class="col-md-4 col-form-label text-md-right">{{ __('Indirizzo') }}</label>

                            <div class="col-md-6">
                                <input id="user_street" type="text" class="form-control @error('user_street') is-invalid @enderror" name="user_street" value="{{ old('user_street') }}" required autocomplete="user_street" autofocus>

                                @error('user_street')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        {{-- user_city --}}
                        <div class="form-group row">
                            <label for="user_city" class="col-md-4 col-form-label text-md-right">{{ __('Città') }}</label>

                            <div class="col-md-6">
                                <input id="user_city" type="text" class="form-control @error('user_city') is-invalid @enderror" name="user_city" value="{{ old('user_city') }}" required autocomplete="user_city" autofocus>

                                @error('user_city')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        {{-- user_zip_code --}}
                        <div class="form-group row">
                            <label for="user_zip_code" class="col-md-4 col-form-label text-md-right">{{ __('ZIP code') }}</label>

                            <div class="col-md-6">
                                <input id="user_zip_code" type="number" class="form-control @error('user_zip_code') is-invalid @enderror" name="user_zip_code" value="{{ old('user_zip_code') }}" required autocomplete="user_zip_code" autofocus>

                                @error('user_zip_code')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        {{-- restaurant_name --}}
                        <div class="form-group row">
                            <label for="restaurant_name" class="col-md-4 col-form-label text-md-right">{{ __('Nome Ristorante') }}</label>

                            <div class="col-md-6">
                                <input id="restaurant_name" type="text" class="form-control @error('restaurant_name') is-invalid @enderror" name="restaurant_name" value="{{ old('restaurant_name') }}" required autocomplete="restaurant_name" autofocus>

                                @error('restaurant_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        {{-- description --}}
                        <div class="form-group row">
                            <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Descrizione Ristorante') }}</label>

                            <div class="col-md-6">
                                <textarea id="description" class="form-control @error('description') is-invalid @enderror" rows="10" name="description" value="{{old('description')}}" required autocomplete="description" autofocus></textarea>

                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        {{-- type --}}
                        <div class="form-group">
                            <label for="type_id" class="col-md-4 col-form-label text-md-right">{{ __('Tipologia di ristorante') }}</label>
                            <ul class="form-control" id="type_id" name="type_id">
                                @foreach ($types as $type)
                                    <div class="custom-control custom-checkbox">
                                        <input name="types[]" type="checkbox" class="custom-control-input" id="type_{{$type->id}}" value={{$type->id}}>
                                        <label class="custom-control-label" for="type{{$type->id}}">{{$type->name}}</label>
                                    </div>
                                @endforeach


                              

                            </ul>
                        </div>







                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
