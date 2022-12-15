@extends('layouts.app')

@section('title', 'Events')

@section('content')
    <div class="events">
        <div class="headerEvents">
            <h1>Mulai cari event & kegiatan</h1>
            <p>buat bantu kamu kembangin diri!</p>
        </div>
        <div class="options">
            <div class="bttn">
                <div class="SearchEvent">
                    <div class="form">
                        <input type="text" name="name" placeholder="Cari Event" required >
                        <div class="cariEventSymbol">
                            <a href="">
                                <img src="image/icon_src.svg" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="Date">
                    <input type="text" name="name" placeholder="Date" >
                    <div class="dateSymbol">
                            <img src="image/icon_date.svg" alt="">
                    </div>
                </div>
                <div class="Location">
                    <input type="text" name="name" placeholder="Location" required >
                    <div class="locationSymbol">
                        <a href="">
                            <img src="image/icon_location.svg" alt="">
                        </a>
                    </div>
                </div>
                <div class="Category">
                    <input type="text" name="name" placeholder="Category" required >
                    <div class="categorySymbol">
                        <a href="">
                            <img src="image/icon_category.svg" alt="">
                        </a>
                    </div>
                </div>
                <div class="add">
                    <a href="UploadEventStep1Verify.html">
                        <img src="image/plus.png" alt="">
                    </a>
                </div>
            </div>
        </div>
        <div class="contentsTaA">
            <div class="contents">
                <div class="contentDetails">
                    <div class="head">
                        <h1>Upcoming Events</h1>
                    </div>
                    <div class="details">
                        @foreach ($events as $event)
                        @if ($loop->iteration%2 != 0)
                        <div class="contentOuter">
                            <a href="eventDetails.html">
                                <img src="image/thumbnail_StressManage.svg" alt="">
                                <div class="text">
                                    <h1>{{ $event->title }}</h1>
                                    <p>{{ $event->organizer_name }}</p>
                                    <p>{{ $event->date->format('j F Y') }}</p>
                                </div>
                            </a>
                            @if ($loop->iteration == 1)

                            <div class="b">
                                <a href="">
                                    <button> < </button>
                                </a>
                            </div>
                            @elseif ($loop->iteration == 3)
                            <div class="n">
                                <a href="">
                                    <button>
                                        >
                                    </button>
                                </a>
                            </div>
                            @endif


                        </div>
                        @elseif ($loop->iteration%2 == 0)
                        <div class="contentMid">
                            <a href="">
                                <img src="image/thumbnail_keluargaGojek.svg" alt="">
                                <div class="text">
                                    <h1>{{ $event->title }}</h1>
                                    <p>{{ $event->organizer_name }}</p>
                                    <p>{{ $event->date->format('j F Y') }}</p>
                                </div>
                            </a>
                        </div>
                        @endif
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="contents">
                <div class="contentDetails">
                    <div class="head">
                        <h1>Popular Events</h1>
                    </div>
                    <div class="details">
                        <div class="contentOuter">
                            <a href="">
                                <img src="image/thumbnail_narasi.svg" alt="">
                                <div class="text">
                                    <h1>Narasi Campaign Volunteer</h1>
                                    <p>Narasi Indonesia</p>
                                    <p>8 September 2022</p>
                                </div>
                            </a>
                            <div class="b">
                                <a href="">
                                    <button>
                                        <
                                    </button>
                                </a>
                            </div>
                        </div>
                        <div class="contentMid">
                            <a href="">
                                <img src="image/thumbnail_keluargaGojek.svg" alt="">
                                <div class="text">
                                    <h1>Jadi Bagian Keluarga Gojek</h1>
                                    <p>Gojek Indonesia</p>
                                    <p>10 Oktober 2022</p>
                                </div>
                            </a>
                        </div>
                        <div class="contentOuter">
                            <a href="">
                                <img src="image/thumbnail_penyiarGratis.svg" alt="">
                                <div class="text">
                                    <h1>Belajar Jadi Penyiar GRATIS!</h1>
                                    <p>Prambors Radio</p>
                                    <p>22 Juli 2022</p>
                                </div>
                            </a>
                            <div class="n">
                                <a href="">
                                    <button>
                                        >
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="showTaA">
            <a href="AllEvents.html">
                <button>
                    More Events
                </button>
            </a>
        </div>
    </div>

@endsection

@push('after-style')
<link rel="stylesheet" href="css/profile.css">
<link rel="stylesheet" href="css/Event.css">
@endpush
