@extends('layouts.app')
@section('title', 'Login')

@section('content')


<div class="data">
    <div class="judul">
        <h1>Masuk ke akun kamu</h1>
        <p>Masukan kredensial pada form</p>
    </div>
    <div class="dataandImg">
        <div class="placeholder">
            <div class="placeholderEmail">
                <p>Email Address</p>
                <input type="email" name="emailLogin" placeholder="Janedoe@gmail.com" required >
            </div>
            <div class="placeholderPass">
                <p>Password</p>
                <input type="password" name="passLogin" placeholder="******************">
                <div class="lupaPass">
                    <a href="forgetPass.html">Lupa Password?</a>
                </div>
            </div>
            <div class="logins">
                <a href="home.html">
                    <button>Login</button>
                </a>
            </div>
            <div class="logins2">
                <a href="home.html">
                    <button>
                        <img class="google" src="image/Google.png" alt="">
                        <a href="login.html">Login with Google</a>
                    </button>
                </a>
            </div>
            <div class="signUp">
                <a href="register.html">Belum punya akun? Yuk daftar dulu</a>
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
