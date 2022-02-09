@extends('layouts.app')


@section('page_title')
    Home
@endsection


@section('main_content')
    <section>
        <div class="container">

            <div class="magazines-list">

                <h2>CURRENT SERIES</h2>

                @include('components.magazines')
                
            </div>
        </div>
    </section>
@endsection