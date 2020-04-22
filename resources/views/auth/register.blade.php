@extends('layouts.app')

@section('content')
<div class="container py-2">
    <div class="row justify-content-center py-5">
        <div class="col-md-10 shadow p-0">
            <div class="row">
                <div class="col-md-5 p-0">
                    <div id="registration-form">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="form-group row pt-2">
                                <div class="col-md-12">
                                    <input id="name" type="text"
                                        class="form-control @error('name') is-invalid @enderror" name="name"
                                        value="{{ old('name') }}" placeholder="{{__("Name")}}" required
                                        autocomplete="name" autofocus>

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-12">
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" placeholder="{{__("Email")}}" required
                                        autocomplete="email">

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
                                        placeholder="{{__("Password")}}" required autocomplete="new-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <input id="password-confirm" type="password" class="form-control"
                                        name="password_confirmation" required placeholder="{{__("Confirm Password")}}"
                                        autocomplete="new-password">

                                </div>

                            </div>

                            <div class="form-group row">
                                <div class="col-md-6">
                                </div>
                                <div class="col-md-6">
                                    <button type="submit" class="btn btn-danger float-right">
                                        {{ __('Sign Up') }}
                                    </button>

                                </div>
                            </div>

                            <div class="form-group row pt-3">
                                <div class="col-md-12">
                                    @if (Route::has('password.request'))
                                    <a class="" href="{{ route('login') }}">
                                        {{ __('Sign In') }}
                                    </a>
                                    @endif
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-7 p-0 registration-image">
                    <div class="bottom-align-text">© Adrianna Van Groningen</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection