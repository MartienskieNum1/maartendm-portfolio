<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Maarten De Meyere</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/reset.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/style.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/homeStyle.css')}}"/>
</head>
<body>
    <header>
        <h3><a href="/">Maarten De Meyere</a></h3>
    </header>
    <main>
        <section class="home-page">
            <h1>Cyber Security Professional</h1>
            <div id="bg-img" style="background-image: url({{asset('img/big-data.jpg')}});"></div>
        </section>
        <section class="news-page">
            <h2>Latest News</h2>

            <div class="flex-container">
                @foreach($posts as $post)
                    <?php $url = str_replace(' ', '-', $post['title']); ?>
                    <article>
                        <img src="{{asset($post['banner'])}}"/>
                        <div class="content">
                            <p id="date-topic">{{$post['date']}} &nbsp; | &nbsp; {{$post['topic']}}</p>
                            <h3>{{$post['title']}}</h3>
                            <p>{{$post['description']}}</p>
                            <a href="/articles/{{$url}}">Read more</a>
                        </div>
                    </article>
                @endforeach
            </div>
            
        </section>
    </main>
</body>
</html>
