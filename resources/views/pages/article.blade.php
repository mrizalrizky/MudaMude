@extends('layouts.app')

@section('title', 'Tips & Articles')

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
                    <button>
                        Belajar Bareng
                    </button>
                </a>
            </div>
            <div class="button">
                <a href="{{ route('article') }}">
                    <button class={{ (request()->is('community/article')) ? 'active' : '' }}>
                        Tips & Artikel
                    </button>
                </a>
            </div>
            {{-- ONLY ADMIN CAN CREATE ARTICLE, FEATURE ON PROGRESS --}}
            {{-- <div class="add">
                <a href="#Pop">
                    <img src="/image/plus.png" alt="PLUS ICON">
                </a>
            </div> --}}
        </div>
    </div>
    <div class="TaA">
        <p>Tips & Artikel biar kamu makin produktif!</p>
    </div>
    <div class="contentsTaA">
        <div class="head">
            <h1>All Articles</h1>
        </div>
        @if (count($articles) > 0)

        @foreach ($articles->chunk(3) as $chunk)
        <div class="contents">
            <div class="contentDetails">
                <div class="details">
                    @foreach ($chunk as $article)
                    @if ($loop->iteration % 2 != 0)
                    <div class="contentOuter">
                        @elseif ($loop->iteration % 2 == 0)
                        <div class="contentMid">
                        @endif
                            <a href="/article/details/{{ $article->slug }}">
                                <img src="{{ Storage::url($article->image) }}" alt="">
                                <div class="text">
                                    <h1>{{ $article->title }}</h1>
                                    <p>Source: {{ $article->source }}</p>
                                    <p>{{ $article->created_at->format('j F Y') }}</p>
                                </div>
                            </a>
                        </div>
                    @endforeach
                    </div>
                </div>
            </div>
        @endforeach
        @else
        <h3>No Articles To Show</h3>
        @endif
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

<link rel="stylesheet" href="/css/profile.css">
<link rel="stylesheet" href="/css/community.css">
<link rel="stylesheet" href="/css/tipsandArtikel.css">
@endpush
