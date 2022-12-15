@extends('layouts.app')

@section('title', 'Event Profile')

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
                <h1>Event</h1>
                <p>Kelola event yang sudah kamu upload maupun ikuti</p>
            </div>
            <div class="details1">
                <div class="bttn">
                    <div class="upload">
                        <a href="/eventprofile">
                            <button>
                                Uploaded
                            </button>
                        </a>
                    </div>
                    <div class="register">
                        <a href="eventProfileR.html">
                            <button>
                                Registered
                            </button>
                        </a>
                    </div>
                </div>
                <div class="event">
                    <div class="row1">
                        <div class="e1">
                            <a href="">
                                <img src="{{ asset('image/event1.png')}}" alt="">
                                <div class="text">
                                    <h1>Stess Management</h1>
                                    <p>Universitas Gajah Mada</p>
                                    <p>3 September 2022</p>
                                </div>
                            </a>
                        </div>
                        <div class="e2">
                            <a href="">
                                <img src="{{ asset('image/event2.png')}}" alt="">
                                <div class="text">
                                        <h1>Jago Public Speaking</h1>
                                        <p>Institut Teknologi Bandung</p>
                                        <p>3 September 2022</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="row2">
                        <div class="e3">
                            <a href="">
                                <img src="{{ asset('image/event3.png')}}" alt="">
                                <div class="text">
                                        <h1>Jadi Bagian Keluarga Gojek</h1>
                                        <p>Gojek Indonesia</p>
                                        <p>10 Oktober 2022</p>
                                </div>
                            </a>
                        </div>
                        <div class="e4">
                            <a href="">
                                <img src="{{ asset('image/event4.png')}}" alt="">
                                <div class="text">
                                        <h1>Belajar Jadi Penyiar GRATIS! </h1>
                                        <p>Prambors Radio</p>
                                        <p>22 Juli 2022</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('after-style')
<link rel="stylesheet" href="{{ asset('css/profile.css') }}">
<link rel="stylesheet" href="{{ asset('css/eventProfile.css') }}">
@endpush
