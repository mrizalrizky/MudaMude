@extends('layouts.app')

@section('title', 'About Us')

@section('content')
    <div class="about">
        <img class="aboutImg" src="image/thumbnail_about.svg" alt="">
            <div class="ourMission">
                <h1>Our Mission</h1>
                <p>Menjadi solusi untuk menambah wawasan dan membantu anak-anak muda indonesia
                    dalam berkolaborasi, baik itu mempromosikan event atau kegiatan antar kampus atau institusi hingga menjadi platform yang mewadahi mereka dalam mengembangkan diri.</p>
            </div>
            <div class="KenapaMudaMude">
                <h1>Kenapa MudaMude?</h1>
                <p>MudaMude memfasilitasi anak muda untuk mempromosikan event hingga kegiatan. Selain itu, MudaMude juga membantu anak muda hingga mahasiswa dalam menemukan teman  belajar, mengedukasi anak muda dalam mengembangkan diri, dan harapannya dapat menjadi wadah sharing kolaborasi hingga informasi.</p>
            </div>
            <img class="punyaPertanyaanImg" src="image/thumbnail_Pertanyaan.svg" alt="">
    </div>

@endsection

@push('after-style')
    <link rel="stylesheet" href="css/about.css">
@endpush
