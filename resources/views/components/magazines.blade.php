<div class="magazines">

    @foreach ($comics as $magazine)
        {{-- Single Magazine --}}
        <div class="single-magazine">
            <a href="{{ route('magazine', ['id' => $magazine['id']]) }}">
                <img src="{{ $magazine['thumb'] }}" alt="">
            </a>
            <h3>{{$magazine['title']}}</h3>
        </div>
    @endforeach

</div>