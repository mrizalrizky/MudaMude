@extends('layouts.app')

@section('title', 'Community')

@section('content')
    <div class="community">
        <div class="headerCommunity">
            <h1>Community</h1>
            <p>Yuk kolaborasi bareng temen - temen lain disini!</p>
        </div>
        <div class="options">
            <div class="bttn">
                <div class="belajarBareng">
                    <a href="communityAfterAdd.html">
                        <button>
                            Belajar Bareng
                        </button>
                    </a>
                </div>
                <div class="tipsandArtikel">
                    <a href="tipsandArtikel.html">
                        <button>
                            Tips & Artikel
                        </button>
                    </a>
                </div>
                <div class="add">
                    <a href="#Pop">
                        <img src="image/+.png" alt="">
                    </a>
                </div>
            </div>
        </div>
        <div class="BB">
            <p>#Belajar Bareng</p>
        </div>
        <div class="contentsMain">
            <div class="belajarBarengDetails1">
                <div class="people">
                    <div class="PeopleDetail">
                        <img src="image/woman.png" alt="">
                        <div class="nama">
                            <h1>Susi</h1>
                            <p>Universitas Bina Nusantara</p>
                        </div>
                    </div>
                    <div class="isi">
                        <p>Belajar IPA bareng yuk, ini linknya, meet.google/sdksn</p>
                    </div>
                    <div class="readMore">
                        <a href="readMoreCommunityBB.html">
                            <button>
                                Read More
                            </button>
                        </a>
                    </div>
                </div>
                <div class="people2">
                    <div class="PeopleDetail">
                        <img src="image/man.png" alt="">
                        <div class="nama">
                            <h1>Angkasa</h1>
                            <p>Universitas Indonesia</p>
                        </div>
                    </div>
                    <div class="isi">
                        <p>Ada yang mau ikut project bareng guys?</p>
                    </div>
                    <div class="readMore">
                        <a href="">
                            <button>
                                Read More
                            </button>
                        </a>
                    </div>
                </div>
                <div class="people">
                    <div class="PeopleDetail">
                        <img src="image/woman.png" alt="">
                        <div class="nama">
                            <h1>Evelyn</h1>
                            <p>Institut Teknologi Bandung</p>
                        </div>
                    </div>
                    <div class="isi">
                        <p>Belajar bareng yuk guys, linknya ini ya zoom.us/sda..</p>
                    </div>
                    <div class="readMore">
                        <a href="">
                            <button>
                                Read More
                            </button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="belajarBarengDetails2">
                <div class="people">
                    <div class="PeopleDetail">
                        <img src="image/man.png" alt="">
                        <div class="nama">
                            <h1>Budi</h1>
                            <p>Universitas Gajah Mada</p>
                        </div>
                    </div>
                    <div class="isi">
                        <p>Projekan Bareng?</p>
                    </div>
                    <div class="readMore">
                        <a href="">
                            <button>
                                Read More
                            </button>
                        </a>
                    </div>
                </div>
                <div class="people2">
                    <div class="PeopleDetail">
                        <img src="image/woman.png" alt="">
                        <div class="nama">
                            <h1>Evelyn</h1>
                            <p>Institut Teknologi Bandung</p>
                        </div>
                    </div>
                    <div class="isi">
                        <p>Guys aku butuh tim buat lomba, kira2 ada yang mau join?</p>
                    </div>
                    <div class="readMore">
                        <a href="">
                            <button>
                                Read More
                            </button>
                        </a>
                    </div>
                </div>
                <div class="people">
                    <div class="PeopleDetail">
                        <img src="image/man.png" alt="">
                        <div class="nama">
                            <h1>Razka</h1>
                            <p>Universitas Tarumanegara</p>
                        </div>
                    </div>
                    <div class="isi">
                        <p>
                            Ada disini yang mengerti materi algoritma? Ayo belajar bareng.
                        </p>
                    </div>
                    <div class="readMore">
                        <a href="readMoreCommunityBB.html">
                            <button>
                                Read More
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div id="Pop" class="goUpload">
            <div class="upload">
                <div class="head">
                    <div class="detailsPeople">
                        <img src="image/iconProfile.png" alt="">
                        <div class="isi">
                            <h1>Susi</h1>
                            <p>Universitas Bina Nusantara</p>
                        </div>
                    </div>
                </div>
                <div class="detailBelajarBareng">
                    <div class="detailUpload">
                        <h1>Mau sharing apa?</h1>
                        <div class="sharing">
                            <div class="text">
                                <input type="text" name="sharing" placeholder="Tulis disini.." required >
                            </div>
                        </div>
                    </div>
                    <div class="linkBB">
                        <h1>Link #BelajarBareng</h1>
                        <div class="belajarBarengLink">
                            <div class="text">
                                <input type="text" name="belajarBareng" placeholder="meet.google.com/sadsafas" required >
                            </div>
                        </div>
                    </div>
                </div>
                <div class="choose">
                    <div class="discard">
                        <a href="community.html">
                            <button>
                                Discard
                            </button>
                        </a>
                    </div>
                    <div class="send">
                        <a href="">
                            <button>
                                Send
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="controlPage">
            <div class="back">
                <a href="">
                    <button>
                        <
                    </button>
                </a>
            </div>
            <div class="one">
                <a href="">
                    <button>
                        1
                    </button>
                </a>
            </div>
            <div class="two">
                <a href="">
                    <button>
                        2
                    </button>
                </a>
            </div>
            <div class="three">
                <a href="">
                    <button>
                        3
                    </button>
                </a>
            </div>
            <div class="next">
                <a href="">
                    <button>
                        >
                    </button>
                </a>
            </div>
        </div>
    </div>
@endsection

@push('after-style')
<link rel="stylesheet" href="css/profile.css">
<link rel="stylesheet" href="css/community.css">

@endpush
