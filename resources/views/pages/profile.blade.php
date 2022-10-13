
@extends('layouts.app')

@section('title', 'Profile')

@section('content')

<div class="profiles">
    <div class="dashboard">
        <div class="judul">
            <h1>Dashboard</h1>
            @include('includes.profilesidebar')
        </div>

    </div>
    <div class="details">
        <div class="editProfile">
            <h1>Edit Profile</h1>
            <p>Masukkan informasi yang valid</p>
        </div>

        <div class="details1">
            <div class="users">
                <div class="userImg">
                <img src="image/iconProfile.png" alt="">
                </div>
                <div class="user">
                    <div class="userName">
                    <p>{{ Auth::user()->username }}</p>
                    </div>
                    <div class="univ">
                        <p>Universitas Bina Nusantara</p>
                    </div>
                </div>
            </div>
            <div class="personalInfo">
            <h1>Personal Information</h1>
            </div>
            <div class="placeholder">
                <div class="placeholderName">
                    <p>Nama</p>
                    <input type="text" name="name" placeholder="{{ Auth::user()->name }}" required >
                </div>
                <div class="placeholderEmail">
                    <p>Email Address</p>
                    <input type="email" name="emailLogin" placeholder="{{ Auth::user()->email }}" required >
                </div>
                <div class="placeholderUsername">
                    <p>Username</p>
                    <input type="text" name="userName" placeholder="{{ Auth::user()->username }}" required >
                </div>
                <div class="placeholderPhone">
                    <p>Phone</p>
                    <input type="text" name="phone" placeholder="{{ Auth::user()->phone }}" required >
                </div>
                <div class="placeholderInstitution">
                    <p>Institution</p>
                    <input type="text" name="institution" placeholder="{{ Auth::user()->institution}}" required >
                </div>
                <div class="placeholderMajor">
                    <p>Major</p>
                <input type="text" name="major" placeholder="{{ Auth::user()->major}}" required >
                </div>
            </div>
        </div>

        <div class="details2">
            <h1>Linked Account</h1>
            <div class="link">
                <div class="sosmed">
                    <p>Google</p>
                 <div class="account">
                        <p>Not connected</p>
                    </div>
                </div>
                <div class="sosmed">
                    <p>Instagram</p>
                    <div class="account">
                        <p>Not Connected</p>
                    </div>
                </div>
                <div class="sosmed">
                    <p>Facebook</p>
                    <div class="account">
                        <p>Not Connected</p>
                    </div>
                </div>
                <div class="sosmed">
                    <p>Linkedin</p>
                    <div class="account">
                        <p>Not Connected</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="bttn">
            <div class="save">
                <a href="confirmProfile.html">
                    <button>
                        Save
                    </button>
                </a>
            </div>
            <div class="discard">
                <a href="">
                    <button>
                        Discard
                    </button>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection

@push('after-style')
<link rel="stylesheet" href="css/profile.css">
@endpush
