@extends('layouts.app')

@section('title', 'Event Details')

@section('content')
<div class="eventDetails">
    <div class="headTips1">
        <div class="judulEvent">
        <h1>{{ $event->title }}</h1>
        </div>
        <div class="daftarEvent">
            <div class="posterEvent">
                <img src="/image/thumbnail_eventDetails.svg" alt="">
            </div>

            <div class="container">
                {{-- mau benerin nama tabel sama modelnya dulu --}}
                <p>{{ $event->category->name }}</p>
                <div class="detailContainer">
                    <div class="icon">
                        <img src="/image/icon_locationDetailEvent.svg" alt="">
                        <p>{{ $event->location }}</p>
                    </div>
                    <div class="icon">
                        <img src="/image/icon_dateDetailevent.svg" alt="">
                        <p>{{ $event->date }}</p>
                    </div>
                    <div class="icon">
                        <img src="/image/icon_organizerdetailEvent.svg" alt="">
                        <p>{{ $event->organizer_name }}</p>
                    </div>
                </div>
                <div class="daftarBtn">
                    <a href="registerEvent.html">
                        <button>
                            Daftar Sekarang
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="eventButton">
        <div class="descButton">
            <a href="">
                <button>
                    Description
                </button>
            </a>
        </div>

        <div class="detailsButton">
            <a href="">
                <button class="DetailsButton">Details</button>
            </a>
        </div>
    </div>

    <div class="content">
        <p>{{ $event->description }}</p>
    </div>
</div>
@endsection

@push('after-style')
<link rel="stylesheet" href="/css/eventDetails.css">
@endpush
