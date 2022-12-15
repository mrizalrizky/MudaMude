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
                <div class="button">
                    <a href="{{ route('community') }}">
                        <button class="{{ (request()->is('community')) ? 'active' : '' }}">
                            Belajar Bareng
                        </button>
                    </a>
                </div>
                <div class="button">
                    <a href="{{ route('article') }}">
                        <button>
                            Tips & Artikel
                        </button>
                    </a>
                </div>
                <div class="add">
                    <a href="#create">
                        <img src="/image/plus.png" alt="plus icon">
                    </a>
                </div>
            </div>
        </div>
        <div class="BB">
            <p>#Belajar Bareng</p>
        </div>

        <div class="contentsMain">
            @if(count($posts) == 0)
            @php
                echo "No posts available";
            @endphp
            @endif
            @foreach ($posts->chunk(3) as $chunk)
            <div class="belajarBarengDetails">
                @foreach ($chunk as $post)
                    @if ($loop->iteration % 2 != 0)
                    <div class="people">
                    @elseif ($loop->iteration %2 == 0)
                    <div class="people2">
                    @endif
                        <div class="PeopleDetail">
                            <img src="image/woman.png" alt="">
                            <div class="nama">
                                <h1>{{ $post->user->name }}</h1>
                                <p>{{ $post->user->institution }}</p>
                            </div>
                        </div>
                        <div class="isi">
                            <p>{{ $post->description }}</p>
                        </div>
                        <div class="readMore">
                            <a href="/post/details/{{ $post->id }}">
                                <button>Read More</button>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
            @endforeach
        </div>

        <div id="create" class="goUpload">
            <div class="upload">
                <div class="head">
                    <div class="detailsPeople">
                        <img src="image/iconProfile.png" alt="">
                        <div class="isi">
                            <h1>{{ $user->name }}</h1>
                            <p>{{ $user->institution }}</p>
                        </div>
                    </div>
                </div>
                <div class="detailBelajarBareng">
                    <div class="detailUpload">
                        <h1>Mau sharing apa?</h1>
                        <div class="sharing">
                                <form enctype="multipart/form-data" action="{{ route('create-post') }}" method="POST">
                                @csrf

                                <div class="text">
                                    <input type="text" id="content" name="content" placeholder="Tulis disini.." required >
                                </div>
                            </div>
                        </div>
                        <div class="linkBB">
                            <h1>Link #BelajarBareng</h1>
                            <div class="belajarBarengLink">
                                <div class="text">
                                    <input type="url" id="url" name="url" placeholder="meet.google.com/sadsafas" required >
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="choose">
                        <div class="discard">
                            <a href="community.html">
                                <button>Discard</button>
                            </a>
                        </div>
                        <div class="send">
                            <button type="submit">Send</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        {{-- <div class="controlPage">
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
        </div> --}}
        </div>
    </div>
@endsection

@push('after-style')
<link rel="stylesheet" href="/css/community.css">
<link rel="stylesheet" href="/css/profile.css">

@endpush
