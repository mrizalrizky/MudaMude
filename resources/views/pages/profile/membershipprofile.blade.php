@extends('layouts.app')

@section('title', 'Membership')

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
                <h1>Membership</h1>
                <p>Kelola membership kamu untuk dapat benefit lebih</p>
            </div>
            <div class="details1">
                <div class="membership">
                    <div class="personalInfo">
                    <h1>Membership Status</h1>
                    </div>
                    <div class="status">
                        <img src="image/MembershipWallet.png" alt="">
                        <div class="txt1">
                           <h1>{{ Auth::user()->membership_name }}</h1>
                            <p>Berakhir pada Selamanya</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="details2">
                <div class="personalInfo">
                    <h1>Mau Upgrade?</h1>
                </div>
                <div class="anyPlans">
                    <div class="membershipLvl">
                        <div class="plan1">
                            <p><span>Lite</span></p>
                            <div class="price">
                                <p>Rp 10.000/bulan</p>
                            </div>
                            <div class="detailPlan">
                                <div class="benefit">
                                    <img src="image/Confirm.png" alt="">
                                    <p>Bebas ikut 3 event premium/minggu</p>
                                </div>
                                <div class="benefit">
                                    <img src="image/Confirm.png" alt="">
                                    <p>Unlimited upload event</p>
                                </div>
                            </div>
                            <div class="buy">
                                <a href="paymentMembershipLiteVA.html">
                                    <button>
                                        Beli
                                    </button>
                                </a>
                            </div>
                        </div>
                        <div class="plan2">
                            <p><mark>Premium</mark></p>
                            <div class="price">
                                <p>Rp 25.000/bulan</p>
                            </div>
                            <div class="detailPlan">
                                <div class="benefit">
                                    <img src="image/Confirm.png" alt="">
                                    <p>Bebas ikut semua event premium</p>
                                </div>
                                <div class="benefit">
                                    <img src="image/Confirm.png" alt="">
                                    <p>Unlimited upload event</p>
                                </div>
                                <div class="benefit">
                                    <img src="image/Confirm.png" alt="">
                                    <p>Akses <b>Belajar Bareng</b> tanpa batas </p>
                                </div>
                            </div>
                            <div class="buy">
                                <a href="">
                                    <button>
                                        Beli
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('after-style')
<link rel="stylesheet" href="css/profile.css">
<link rel="stylesheet" href="css/membershipprofile.css">
@endpush
