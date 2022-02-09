<div class="magazines">

    @foreach ($comics as $magazine)
        {{-- Single Magazine --}}
        <div class="single-magazine">
            <img src="{{ $magazine['thumb'] }}" alt="">
            <h3>{{$magazine['title']}}</h3>
        </div>
    @endforeach

</div>