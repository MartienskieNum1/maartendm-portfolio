<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{$post['title']}}</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset("css/reset.css")}}"/>
    <link rel="stylesheet" href="{{asset("css/style.css")}}"/>
    <link rel="stylesheet" href="{{asset("css/articleStyle.css")}}"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.3/tiny-slider.css">
</head>
<body>
    <header>
        <h3><a href="/">Maarten De Meyere</a></h3>
    </header>
    <main>
        <p id="date-topic">{{$post['date']}} &nbsp; | &nbsp; {{$post['topic']}}</p>
        <h2>{{$post['title']}}</h2>

        @foreach($post['content'] as $content)
            {!! $content !!}
        @endforeach

        @isset($post['images'])
            <div class="images">
                @if(count($post['images']) < 3)
                    <div class="flex-container">
                        @foreach($post['images'] as $image)
                            <img id="image" src="{{asset($image)}}"/>
                        @endforeach
                    </div>
                @else
                    <div class="my-slider">
                        @foreach($post['images'] as $image)
                            <span><img id="image" src="{{asset($image)}}"/></span>
                        @endforeach
                    </div>
                    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/min/tiny-slider.js"></script>
                    <script type="text/javascript" src="{{asset('js/tiny-slider-conf.js')}}"></script>
                @endif
            </div>
        @endisset
    </main>
</body>
</html>