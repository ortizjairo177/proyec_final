@extends('layouts.app')
@section('content')


<div class="  p-3 mb-2 bg-secondary  secc-login">
        
        
    <div class="row justify-content-center">
        <div class="col-md-12   ">
            <div class="card  p-3 mb-2 bg-success text-white">                

                <div class="card-body p-3 mb-2 bg-success text-white">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-12">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>                 
                         <br>
                         <div class="row">
                        <div class="col">
                            <button type="submit" class="btn btn-primary btn-lg ">
                                {{ __('Login') }}                                                       
                            </button>
                        </div>
                        <div class="col">
                            @if (Route::has('password.request'))
                                <a class="btn btn-link text-white justify-content-end" href="{{ route('password.request') }}">
                                    {{('Forgot Your Password?') }}
                                </a>
                            @endif  
                        </div>                                       
    
                    </form>
                </div>
                   
                </div>
            </div>
        </div>
    </div>
</div>
<br><br><br><br><br>
@endsection
