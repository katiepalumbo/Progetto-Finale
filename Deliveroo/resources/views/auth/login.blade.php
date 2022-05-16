@extends('layouts.app2')

@section('content')


<section class="background-radial-gradient overflow-hidden vh-100 ms_background-img">
    <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5">
      <div class="row gx-lg-5 align-items-center mb-5">

        <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10">
          <h1 class="display-1 fw-bold ls-tight ms_text-orange position-absolute top-0 start-0 p-5 m-5">
            <i class="fa-solid fa-moped"></i>
            DeliveBoo
            <br>
            <span class="display-6 ms_text-purple position-absolute">
                - area ristoratore -
            </span>
          </h1>
        </div>
  
        <div class="col-lg-5 mb-5 mb-lg-0">
          {{-- div card login --}}
          <div class="card bg-glass">
            <div class="card-body ms_background-color px-4 py-5 px-md-5 h-75">
              <form method="POST" action="{{ route('login') }}">
                @csrf
                <!-- Email input -->
                <input id="email" type="email" placeholder="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    <label for="email" class="col-md-4 col-form-label text-md-right text-white mb-1 fs-3">{{ __('email') }}</label>

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                     @enderror
  
                <!-- Password input -->
                <input id="password" type="password" placeholder="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                    <label for="password" class="col-md-4 col-form-label text-md-right text-white fs-3">{{ __('password') }}</label>

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    
                {{-- Remember me --}}
                    <div class="form-group row">
                        <div class="col-md-6">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label text-white" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>
                    </div>
                {{-- Submit --}}
                    <div class="form-group row mt-4">
                        <div class="col-md-8 w-100">
                            <button type="submit" class="btn btn-light btn-sm fs-3 fw-bold w-100">
                                {{ __('accedi') }}
                            </button>
                        </div>
                    </div>
                {{--Recupera password--}}
                <div class="form-group row">
                    <div class="col-md-8">
                        @if (Route::has('password.request'))
                            <a class="btn m-0 p-0 text-white" href="{{ route('password.request') }}">
                                {{ __('recupera password') }}
                            </a>
                        @endif
                    </div>
                </div>
              </form>
              <div class="mt-3 text-center">
                  <span class="text-white fs-2">Non hai ancora un account?</span>
                  <a class="btn btn-light fs-5 w-50" href="{{ route('register') }}">{{ __('Registrati!') }}</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="position-absolute bottom-25 end-0 translate-middle-y me-5 pe-5">
        <a class="me-5 pe-5 ms_text-orange fw-bold fs-1 text-decoration-none" href="{{ route('menu') }}">{{ __('torna alla sezione ordini') }}</a>
    </div>

    <div class="bg-black text-white position-absolute bottom-0 end-0 d-flex w-100 flex-row-reverse">
            <span>Copyright DeliveBoo all rights deserved - website by us</span>
    </div>


  </section>
  
@endsection
