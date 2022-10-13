@extends('layouts.app')

@section('title', 'Register')

@section('content')

<div class="data">
    <div class="judul">
        <h1>Buat akun baru</h1>
        <p>Amankan akun kamu dengan baik</p>
    </div>

    <form method="POST" action="{{ route('register') }}">
        @csrf
    <div class="dataandImg">
        <div class="placeholder">
            <div class="placeholderNama">
                {{-- <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label> --}}
                <p>{{ __('Name') }}</p>

                {{-- <div class="col-md-6"> --}}
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Full Name">

                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                {{-- </div> --}}
            </div>

            <div class="placeholderUsername">
                <p>{{ ('Username') }}</p>
                <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" placeholder="Username">

                @error('username')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="placeholderEmail">
                <p>{{ __('Email Address') }}</p>
                {{-- <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label> --}}

                {{-- <div class="col-md-6"> --}}
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email Address">

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                {{-- </div> --}}
            </div>

            <div class="placeholderPass">
                {{-- <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label> --}}
                <p>{{ __('Password') }}</p>

                {{-- <div class="col-md-6"> --}}
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                {{-- </div> --}}
            </div>

            <div class="placeholderConfirmPass">
                {{-- <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label> --}}
                <p>{{ __('Confirm Password') }}</p>

                {{-- <div class="col-md-6"> --}}
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
                {{-- </div> --}}
            </div>

            <div class="termsandConds">
                <a href="/terms">Terms & Conditions</a>
            </div>



            <div class="continue">
                    <button type="submit" class="btn btn-primary">{{ __('Register') }}</button>
            </div>

            {{-- <div class="row mb-0">
                <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Register') }}
                    </button>
                </div>
            </div> --}}
        </div>
    </form>
        <img src="image/LoginImg.png" alt="">
    </div>

@endsection

@push('after-style')
<link rel="stylesheet" href="css/login.css">
<link rel="stylesheet" href="css/register.css">
@endpush
