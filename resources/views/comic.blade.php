@foreach ($comics as $key => $valore)
<div class="comicContainer">
    <div class="cover">
        <img src="{{$valore['thumb']}}" >
    </div>
    <span>{{$valore['series']}}</span>
</div>
@endforeach