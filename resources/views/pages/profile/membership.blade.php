@extends('layouts.app')

@section('title', 'Membership Profile')

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
                        <img src="{{ asset('image/MembershipWallet.png')}}" alt="">
                        <div class="txt1">
                           <h1>{{ $user->membership->name }}
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
                        @foreach ($memberships as $membership)
                        <div class="plans">
                            <p><mark>{{$membership->name }}</mark></p>
                            <div class="price">
                                <p>Rp {{ number_format($membership->price ,0, ',', '.') }}/bulan</p>
                            </div>
                            <div class="detailPlan">
                                <div class="benefit">
                                    <img src="/image/Confirm.png" alt="">
                                    <p>Bebas ikut 3 event premium/minggu</p>
                                </div>
                                <div class="benefit">
                                    <img src="/image/Confirm.png" alt="">
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
                </div>
            </div>
        </div>
    </div>
@endsection

@push('after-style')
<link rel="stylesheet" href="{{ asset('css/profile.css') }}">
<link rel="stylesheet" href="{{ asset('css/membershipprofile.css') }}">
@endpush
