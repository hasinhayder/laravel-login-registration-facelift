@extends('layouts.app')

@section('content')
<div class="container py-2">
    <div class="row justify-content-center py-5">
        <div class="col-md-10 shadow p-0">
            <div class="row">
                <div class="col-md-5 p-0">
                    <div id="login-form">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group row pt-2">
                                <div class="col-md-12">
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" placeholder="{{__('E-Mail Address')}}" required
                                        autocomplete="email" autofocus>

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-12">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="current-password" placeholder="{{__('Password')}}">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                            </div>

                            <div class="form-group row">
                                <div class="col-md-6">
                                    <div class="form-check pt-2">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                            {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <button type="submit" class="btn btn-light float-right">
                                        {{ __('Sign In') }}
                                    </button>

                                </div>
                            </div>

                            <div class="form-group row pt-3">
                                <div class="col-md-4">
                                    @if (Route::has('password.request'))
                                    <a class="" href="{{ route('register') }}">
                                        {{ __('Sign Up') }}
                                    </a>
                                    @endif
                                </div>

                                {{-- <div class="col-md-8">
                                    @if (Route::has('password.request'))
                                    <a class="float-right " href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                    @endif
                                </div> --}}
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-7 p-0 login-image">
                    <div class="bottom-align-text">© Adrianna Van Groningen</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
