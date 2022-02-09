@extends('layouts.app')


@section('page_title')
    Home
@endsection


@section('main_content')
    <section>
        <div class="container">

            <div class="magazines-list">

                <h2>CURRENT SERIES</h2>

                <div class="magazines">

                    @foreach ($comics as $magazine)
                        {{-- Single Magazine --}}
                        <div class="single-magazine">
                            <img src="https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2018/09/AC1000_DLX_162-001_HD_5ba13723281ab0.37845353.jpg?itok=ZsI-C5eX" alt="">
                            <h3>{{$magazine['title']}}</h3>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </section>
@endsection