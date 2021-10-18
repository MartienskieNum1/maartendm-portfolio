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
</head>
<body>
    <header>
        <h3><a href="/">Maarten De Meyere</a></h3>
    </header>
    <main>
        <h2>{{$post['title']}}</h2>
        {!! $post['content'] !!}
    </main>
</body>
</html>