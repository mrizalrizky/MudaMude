@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="introduction">
        <div class="platformKolaborasi">
            <h1>Platform Kolaborasi Anak Muda Indonesia</h1>
        </div>
        <img class="heroImg" src="image/introimage.png" alt="">
        <div class="gabungSekarang">
            <a href="{{ route('register') }}">
                <button type="button">Mulai Kolaborasi!</button>
            </a>
        </div>
            <div class="gerakBarengMudaMude">
                <h1>Gerak Bareng MudaMude</h1>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Mollitia nostrum eveniet
                    eligendi incidunt repellendus quia tempore odit aspernatur, totam dicta, neque quis
                    velit ea deserunt hic minima modi voluptatibus recusandae? Unde, ea corporis blanditiis
                    minus repudiandae quae dolor ex quidem veritatis tempore reiciendis aliquid vel delectus,
                    voluptates perspiciatis provident doloribus earum eos! Sapiente eos suscipit facilis, animi
                    aspernatur veniam consequuntur similique possimus, rerum consequatur dicta est impedit magni
                    totam sint voluptatum doloribus vero iste consectetur minus, adipisci itaque error! Nostrum
                    perspiciatis itaque adipisci nihil odio nulla delectus commodi consequatur voluptate ex? Nobis
                    qui culpa facere repellendus cupiditate fugit eligendi exercitationem temporibus magnam pariatur,
                    praesentium provident.</p>
            </div>
    <div class="benefitIkutGabung">
        <div class="BIG">
            <h1>Benefit yang kamu dapetin kalau ikut gabung!</h1>
        </div>
        <div class="benefit">
            <div class="benefit1">
                <h1>Info Seminar</h1>
                <img class="heroImg" src="image/cariinfo.png" alt="">
                <div class="cariInfotxt">
                    <a href="event">
                        <button type="button">Cari Info</button>
                    </a>
                </div>
            </div>
            <div class="benefit2">
                <h1>Promosiin Event Kamu</h1>
                <img class="heroImg" src="image/uploadevent.png" alt="">
                <div class="promosiEventtxt">
                    <a href="partnership">
                        <button type="button">Upload Event</button>
                    </a>
                </div>
            </div>
            <div class="benefit3">
                <h1>Belajar Bareng Positif Circle</h1>
                <img class="heroImg" src="image/cariteman.png" alt="">
                <div class="belajarBarengtxt">
                    <a href="community">
                        <button type="button">Cari Teman</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="apaKataMereka">
        <div class="AKM">
            <h1>Apa Kata Mereka?</h1>
        </div>
        <div class="allPeople">
            <div class="people1">
                <div class="testiPeople">
                    <img src="image/icontesti.png" alt="">
                    <div class="nama">
                    <h1>Ario Rahmat</h1>
                    <p>Universitas Bina Nusantara</p>
                    </div>
                </div>
                <div class="isi">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
                </div>
            </div>
            <div class="people2">
                <div class="testiPeople">
                    <img src="image/icontesti.png" alt="">
                    <div class="nama">
                    <h1>Alexander Michael</h1>
                    <p>Universitas Indonesia</p>
                    </div>
                </div>
                <div class="isi">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
                </div>
            </div>
            <div class="people3">
                <div class="testiPeople">
                    <img src="image/icontesti.png" alt="">
                    <div class="nama">
                    <h1>Matthew Togi</h1>
                    <p>Institut Teknologi Bandung</p>
                    </div>
                </div>
                <div class="isi">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('after-style')
    <link rel="stylesheet" href="css/homepage.css">
@endpush
