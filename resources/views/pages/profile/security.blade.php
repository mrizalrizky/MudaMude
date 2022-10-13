@extends('layouts.app')
@section('title', 'Security')

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
                <h1>Account Security</h1>
                <p>Amankan akun kamu dengan baik</p>
            </div>
            <div class="details1">
                <div class="personalInfo">
                <h1>Change Password</h1>
                </div>
                <div class="placeholder">
                    <div class="placeholderOldPass">
                        <p>Old Password</p>
                        <input type="password" name="oldPass" placeholder="******************" required >
                    </div>
                    <div class="placeholderNewPass">
                        <p>New Password</p>
                        <input type="password" name="newPass" placeholder="******************" required >
                    </div>
                </div>
            </div>
            <div class="bttn">
                <div class="save">
                    <a href="confirmPass.html">
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
<link rel="stylesheet" href="css/securityprofile.css">
@endpush
