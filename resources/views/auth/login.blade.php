@extends('layouts.app')

@section('title', 'Login')

@section('content')

<form method="POST" action="{{ route('login') }}">
    @csrf

    <div class="data">
        <div class="judul">
            <h1>Masuk ke akun kamu</h1>
            <p>Masukan kredensial pada form</p>
        </div>

        <div class="dataandImg">
            <div class="placeholder">
                <div class="placeholderEmail">
                    <p>Email Address</p>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                </div>
                <div class="placeholderPass">
                    <p>Password</p>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                <div class="lupaPass" style="padding-bottom: 20px">
                    <a href="forgetPass.html">Lupa Password?</a>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6 offset-md-4">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                        <label class="form-check-label" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </div>
                </div>
            </div>

            <div class="logins">
                <a href="/">
                    <button type="submit">{{ __('Login') }}</button>
                </a>
            </div>

            @if (Route::has('pages.forgot'))
                <a class="btn btn-link" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
            @endif

        </form>
            {{-- <div class="logins2">
                <a href="home.html">
                    <button>
                        <img class="google" src="image/Google.png" alt="">
                        <a href="login.html">Login with Google</a>
                    </button>
                </a>
            </div> --}}
            <div class="signUp">
                <a href="/register">Belum punya akun? Yuk daftar dulu</a>
            </div>
        </div>
        <img src="image/LoginImg.png" alt="">
    </div>
</div>

@endsection

@push('after-style')

<link rel="stylesheet" href="css/navbarlogin.css">
<link rel="stylesheet" href="css/login.css">
@endpush
