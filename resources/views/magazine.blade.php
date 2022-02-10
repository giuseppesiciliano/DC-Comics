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
        <div class="container">
            <div class="content">

                <div class="details">

                    {{-- Title --}}
                    <h1 class="title">{{ $magazine['title'] }}</h1>
    
                    {{-- Price/Available --}}
                    <div class="price-available">
                        <div class="price">
                            <span>U.S. Price: {{ $magazine['price'] }}</span>
                            <span>AVAILABLE</span>
                        </div>
    
                        {{-- <div class="check-availability">
                            <a href="#">
                                Check Availability
                            </a>
                        </div> --}}
                    </div>
    
                    {{-- Description --}}
                    <div class="description">
                        <p>{{ $magazine['description'] }}</p>
                    </div>
                </div>
    
                <div class="adv">
                    <img src="{{ asset('images/advmia.png') }}" alt="">
                </div>
            </div>

        </div>
    </div>

@endsection