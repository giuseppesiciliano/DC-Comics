@extends('layouts.app')


@section('page_title')
    Home
@endsection

@section('main_classes')
bgc-grey
@endsection

@section('main_content')
    <section>
        <div class="container">

            <div class="magazines-list">

                <h2>CURRENT SERIES</h2>

                {{-- Single Magazine --}}
                @include('components.magazines')

            </div>
        </div>
    </section>


    <div class="load-more">
        <div class="button">
            LOAD MORE
        </div>
    </div>


    @include('components.services')
    
@endsection



