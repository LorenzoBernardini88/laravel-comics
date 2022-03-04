<div class="top_footer">
    <div class="container">
        @foreach ($topfooter as $key => $valore)
            <div class="content_top">
                <img src="{{$valore['img']}}" >
                <span>{{$valore['text']}}</span>
            </div>
        @endforeach 
    </div>
</div>
