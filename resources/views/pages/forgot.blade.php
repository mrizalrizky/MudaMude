@extends('layouts.app')
@section('title', 'Forgot Password')
@section('content')
    <div class="data">
    <div class="judul">
        <h1>Lupa Password?</h1>
        <p>Masukan email kamu untuk recovery password</p>
    </div>
    <div class="dataandImg">
        <div class="placeholder">
            <div class="placeholderEmail">
                <p>Email Address</p>
                <input type="email" name="emailLogin" placeholder="Janedoe@gmail.com" required >
            </div>
            <div class="infoEmail">
                <p>Kami akan mengirimkan link untuk recovery <br> password melalui email kamu</p>
            </div>
            <div class="send">
                <a href="confirmEmail.html">
                    <button>Send</button>
                </a>
            </div>
        </div>
        <img src="image/LoginImg.png" alt="">
    </div>
    </div>

@endsection

@push('after-style')
<link rel="stylesheet" href="css/login.css">
<link rel="stylesheet" href="css/forgetpass.css">
@endpush
