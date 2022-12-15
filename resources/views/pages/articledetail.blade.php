@extends('layouts.app')

@section('title', 'Article Details')

@section('content')
<div class="tipsandArtikelDetails1">
    <div class="headTips1">
        <div class="head">
            <a href="{{ route('article') }}"><p><</p></a>
            <h1>{{$article->title }}</h1>
        </div>
        <div class="source">
            <p>Source: {{ $article->source }}</p>
        </div>
        <div class="imageTaA1">
            <img src="{{ Storage::url($article->image) }}" alt="">
        </div>
    </div>
    <div class="content">
        <p>{{ $article->description }}</p>
    </div>
</div>
@endsection

@push('after-style')
<link rel="stylesheet" href="/css/tipsandArtikelDetails1.css">
@endpush
