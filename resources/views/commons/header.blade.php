<header>
    <div class="container">
        <img src="{{ asset('img/dc-logo.png') }}" alt="">
        <ul>
            @foreach ($nav as $elemento)
            <li><a href="#">{{$elemento}}</a></li>
            @endforeach
        </ul>
    </div>
    <div class="jumbo"></div>
</header>



