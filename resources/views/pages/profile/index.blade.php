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
                        <p>{{ Auth::user()->institution }}</p>
                    </div>
                </div>
            </div>
            <div class="personalInfo">
            <h1>Personal Information</h1>
            </div>
            <div class="placeholder">
                <p>Nama</p>
                <input id="name" type="text" name="name" placeholder="{{ Auth::user()->name }}" required >

                <p>Email Address</p>
                <input id="email" type="email" name="emailLogin" placeholder="{{ Auth::user()->email }}" required >

                <p>Username</p>
                <input id="username" type="text" name="userName" placeholder="{{ Auth::user()->username }}" required >

                <p>Phone</p>
                <input id="phone" type="tel" name="phone" placeholder="{{ Auth::user()->phone }}" required >

                <p>Institution</p>
                <input id="institution" type="text" name="institution" placeholder="{{ Auth::user()->institution}}" required >

                <p>Major</p>
                <input id="major" type="text" name="major" placeholder="{{ Auth::user()->major}}" required >
            </div>
        </div>

        {{-- <div class="details2">
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
        </div> --}}

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
<link rel="stylesheet" href="{{ asset('css/profile.css') }}">
@endpush
