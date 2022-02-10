@extends('layouts.app')

@section('page_title')
    Magazine
@endsection


@section('main_content')

    <div class="banner-blue">
        <div class="container">

            {{-- Thumb --}}
            <div class="thumb-magazine">
                <img src="{{ $magazine['thumb'] }}" alt="">
                <h5>VIEW GALLERY</h5>
            </div>
        </div>
    </div>

    <div class="info-magazine">
        <div class="details">

            <h1 class="title">{{ $magazine['title'] }}</h1>
        </div>
    </div>

@endsection