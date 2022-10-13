@extends('layouts.app')

@section('title', 'Register')
@section('content')

<div class="data">
    <div class="judul">
        <h1>Buat akun baru</h1>
        <p>Amankan akun kamu dengan baik</p>
    </div>
    <div class="dataandImg">
        <div class="placeholder">
            <div class="placeholderNama">
                <p>Nama</p>
                <input type= "text" name="nama" placeholder="Jane Doe"z>
            </div>
            <div class="placeholderUsername">
                <p>Username</p>
                <input type= "text" name="user" placeholder="Janedoe">
            </div>
            <div class="placeholderEmail">
                <p>Email Address</p>
                <input type="email" name="emailLogin" placeholder="Janedoe@gmail.com">
            </div>
            <div class="placeholderPass">
                <p>Password</p>
                <input type="password" name="passLogin" placeholder="******************">
            </div>
            <div class="placeholderConfirmPass">
                <p>Confirm Password</p>
                <input type="password" name="conf" placeholder="******************">
            </div>
            <div class="termsandConds">
                <a href="">Terms & Conditions</a>
            </div>
            <div class="continue">
                <a href="login.html">
                    <button>Continue</button>
                </a>
            </div>
        </div>
        <img src="image/LoginImg.png" alt="">
    </div>
</div>
@endsection

@push('after-style')
<link rel="stylesheet" href="css/login.css">
<link rel="stylesheet" href="css/register.css">
@endpush
