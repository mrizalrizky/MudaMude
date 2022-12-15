@extends('layouts.app')
@section('title', 'Partnership')

@section('content')

    <div class="partnership">

        <!-- posterKolaborasi -->
        <img class="partnershipImg" src="image/thumbnail_Partnership.svg" alt="">

            <div class="KolaborasiBerlangsung">
                <h1>Kolaborasi Yang Sedang Berlangsung</h1>
            </div>

            <div class="event">
                <div class="row1">
                    <div class="e1">
                        <a href="">
                            <img src="image/partnership_MudaxTokped.svg" alt="">
                            <div class="text">
                            <h1>MudaMude x Tokopedia</h1>
                            <p>Potongan 10% Membership</p>
                            <p>KODE KUPON : 5579043</p>
                            </div>
                        </a>
                    </div>
                    <div class="e2">
                        <a href="">
                            <img src="image/partnership_MudaxBinus.svg" alt="">
                            <div class="text">
                                <h1>MudaMude x Binus</h1>
                                <p>Potongan 15% Membership</p>
                                <p>KODE KUPON : A8SHDLSA</p>
                            </div>
                        </a>
                    </div>
                    <div class="e3">
                        <a href="">
                            <img src="image/partnership_MudaxTraveloka.svg" alt="">
                            <div class="text">
                                <h1>MudaMude x Traveloka</h1>
                                <p>Potongan 15% Membership</p>
                                <p>KODE KUPON : 908HSBFS</p>
                            </div>
                        </a>
                    </div>
                </div>

            </div>

        <!-- posterUploadEvent -->
        <img class="uploadEventGratis" src="image/thumbnail_GratisUploadEvent.svg" alt="">



        <!-- membership -->
            <div class="WaktunyaJadiMember">
                <h1>Waktunya Jadi Member!</h1>
            </div>

            @if(count($memberships) > 0)
            <div class="membershipLvl">
                @foreach ($memberships as $membership)
                <div class="plans">
                    <p><mark>{{$membership->name }}</mark></p>
                    <div class="price">
                        <p>Rp {{ number_format($membership->price ,0, ',', '.') }}/bulan</p>
                    </div>
                    <div class="detailPlan">
                        <div class="benefit">
                            <img src="image/Confirm.png" alt="">
                            <p>Bebas ikut 3 event premium/minggu</p>
                        </div>
                        <div class="benefit">
                            <img src="image/Confirm.png" alt="">
                            <p>Max 2x upload event</p>
                        </div>
                    </div>
                    <div class="buy">
                        <a href="/profile/membership/checkout/{{ $membership->id }}">
                            <button>Beli</button>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>

            @else
            @php
                echo "No Membership Plans Available";
            @endphp

            @endif

            <!-- testimoni -->
            <div class="apaKataMereka">
                <h1>Apa Kata Mereka?</h1>
                <div class="testimoni">
                    <div class="testimoni1">
                        <img class="testi1" src="image/IconTesti.png" alt="">
                        <div class="testiPeople1">
                            <div class="nama">
                            <p>Ario Rahmat</p>
                            </div>
                            <p>Bina Nusantara University</p>
                        </div>
                        <div class="testiPeople1Detail">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                            </p>
                        </div>
                    </div>
                    <div class="testimoni2">
                        <img class="testi2" src="image/IconTesti.png" alt="">
                        <div class="testiPeople2">
                            <div class="nama">
                            <p>Alexander Michael</p>
                        </div>
                            <p>Universitas Indonesia</p>
                        </div>
                        <div class="testiPeople2Detail">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                            </p>
                        </div>
                    </div>
                    <div class="testimoni3">
                        <img class="testi3" src="image/IconTesti.png" alt="">
                        <div class="testiPeople3">
                            <div class="nama">
                            <p>Matthew Togi</p>
                            </div>
                            <p>Institut Teknologi Bandung</p>
                        </div>
                        <div class="testiPeople3Detail">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                            </p>
                        </div>
                    </div>
                </div>
            </div>
    </div>
@endsection

@push('after-style')
    <link rel="stylesheet" href="css/partnership.css">
@endpush
