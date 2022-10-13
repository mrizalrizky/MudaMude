
@extends('layouts.app')

@section('title', 'Profile')

@section('section')


<div class="profiles">
    <div class="dashboard">
        <div class="judul">
            <h1>Dashboard</h1>
            <div class="menu">
                <img src="image/iconProfile.png" alt="">
                <p>Jane Doe</p>
                <div class="txt">
                    <p>Universitas Bina Nusantara</p>
                </div>
                <div class="menuDetails">
                    <div class="Profile">
                        <a href="profile.html">
                            <button>
                                <img src="image/User.png" alt="">
                                <p>Profile</p>
                            </button>
                        </a>
                    </div>
                    <div class="Event">
                        <a href="eventProfileU.html">
                            <button>
                                <img src="image/Event.png" alt="">
                                <p>Event</p>
                            </button>
                        </a>
                    </div>
                        <div class="Membership">
                            <a href="membershipProfile.html">
                                <button>
                                    <img src="image/Membership.png" alt="">
                                    <p>Membership</p>
                                </button>
                            </a>
                        </div>
                        <div class="Security">
                            <a href="securityProfile.html">
                                <button>
                                    <img src="image/Security.png" alt="">
                                    <p>Security</p>
                                </button>
                            </a>
                        </div>
                        <div class="help">
                            <a href="">Butuh Bantuan?</a>
                        </div>
                        <div class="logOut">
                            <a href="index.html">Log Out</a>
                        </div>
                    </div>
                </div>
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
                            <p>Jane Doe</p>
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
                        <input type="text" name="name" placeholder="Jane Doe" required >
                    </div>
                    <div class="placeholderEmail">
                        <p>Email Address</p>
                        <input type="email" name="emailLogin" placeholder="Janedoe@gmail.com" required >
                    </div>
                    <div class="placeholderUsername">
                        <p>Username</p>
                        <input type="text" name="userName" placeholder="Janedoe" required >
                    </div>
                    <div class="placeholderPhone">
                        <p>Phone</p>
                        <input type="text" name="phone" placeholder="08176127261" required >
                    </div>
                    <div class="placeholderInstitution">
                        <p>Institution</p>
                        <input type="text" name="institution" placeholder="Universitas Bina Nusantara" required >
                    </div>
                    <div class="placeholderMajor">
                        <p>Major</p>
                    <input type="text" name="major" placeholder="Computer Science" required >
                    </div>
                </div>
            </div>

            <div class="details2">
                <h1>Linked Account</h1>
                <div class="link">
                    <div class="sosmed">
                        <p>Google</p>
                     <div class="account">
                         <p>Janedoe@gmail.com</p>
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
