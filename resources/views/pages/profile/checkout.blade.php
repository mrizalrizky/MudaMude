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
                <div class="personalInfo">
                    <h1>Checkout Membership</h1>
                    <div class="detailPayment">
                        <div class="detailPayments">
                            <div class="detailJudul">
                                <p>Payment Details</p>
                            </div>
                            <div class="lite">
                                <p>{{ $membership->name }} Membership</p>
                                <p>Rp {{ number_format($membership->price, 0, ',', '.')}}</p>
                            </div>
                            <div class="ppn">
                                <p>PPN</p>
                                <p>Rp 1.000</p>
                            </div>
                            <div class="total">
                                <p>Total Harga</p>
                                <div class="totalHarga">
                                    <p>Rp {{ number_format($membership->price+1000, 0, ',', '.')}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="paymentMethod">
                            <p>Payment Method</p>
                            <div class="bttn">
                                <div class="VA">
                                    <a href="paymentMembershipLiteVA.html">
                                        <button>
                                            Virtual Account
                                        </button>
                                    </a>
                                </div>
                                <div class="DC">
                                    <a href="paymentMembershipLiteDC.html">
                                        <button>
                                            Debit/Credit Card
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="MudaMude">
                            <p>PT Millenia Membangun Indonesia</p>
                            <div class="noRek">
                            <p>BCA - 17249902012</p>
                            </div>
                        </div>
                        <div class="coupon">
                            <div class="placeholderCoupon">
                                <p>Coupon</p>
                            <input maxlength="5" type="text" name="Coupon" placeholder="SJNVS" required >
                            </div>
                        </div>
                        <div class="confirmPayment">
                            <div class="buy">
                                <a href="paymentSuccessLite.html">
                                    <button>
                                        Payment Confirmation
                                    </button>
                                </a>
                            </div>
                        </div>
                        <div class="hubungiAdmin">
                            <a href="">Hubungi Admin</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection

@push('after-style')
<link rel="stylesheet" href="/css/profile.css">
<link rel="stylesheet" href="/css/paymentMembership.css">
@endpush
