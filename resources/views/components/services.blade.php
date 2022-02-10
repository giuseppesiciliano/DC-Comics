<div class="banner-service">
    <ul>
        @foreach ($services as $service)
            <li>
                <img src="{{ $service['thumb'] }}" alt="">
                <span>{{ $service['name'] }}</span>
            </li>
        @endforeach
    </ul>
</div>