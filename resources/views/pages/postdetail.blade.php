@extends('layouts.app')

@section('title', 'Post Details')

@push('after-style')
<link rel="stylesheet" href="/css/readMoreCommunityBB.css">
@endpush

@section('content')

<div class="upload">
    <div class="head">
        <div class="detailsPeople">
            <img src="/image/iconProfile.png" alt="">
            <div class="isi">
                <h1>{{ $post->user->name }}</h1>
                <p>{{ $post->user->institution }}</p>
            </div>
        </div>
        <div class="dots">
            <a href="">
                <img src="/image/3dots.png" alt="">
            </a>
            <div class="userDo">
                <div class="share">
                    <a href="">Share</a>
                    <button>Share</button>
                </div>
                <form action="/post/details/{{ $post->id }}" method="POST">
                    {{ method_field('DELETE') }}
                    @csrf

                    <div class="delete">
                        <button type="submit">Delete</button>
                    </div>
                </form>
                <div class="report">
                    <a href="">Report</a>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="details">
            <p>{{ $post->description }}</p>
        </div>
        <div class="anyLink">
            <p>{{ $post->url }}</p>
            <button>
                <a href="http://{{ $post->url }}">Join</a>
            </button>
        </div>
    </div>
    <div class="activity">
        <div class="thumbUp">
            <a href="">
                <img src="/image/ThumbUp.png" alt="">
            </a>
        </div>
        <div class="thumbDown">
            <a href="">
                <img src="/image/ThumbDown.png" alt="">
            </a>
        </div>
        <div class="comment">
            <a href="">
                <img src="/image/Comment.png" alt="">
            </a>
        </div>
    </div>
    <hr>
    <div class="uploadComments">
        <div class="text">
            <input type="text" name="comments" placeholder="Tulis komentar.." required >
        </div>
        <div class="send">
            <a href="">
                <img src="/image/send.png" alt="">
            </a>
        </div>
    </div>
    <div class="comments">
        <div class="commentLogo">
            <img src="/image/Comment.png" alt="">
        </div>
        <div class="commentDetails">
            <p>Belum ada komentar</p>
        </div>
    </div>
</div>
@endsection
