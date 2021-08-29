<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .background{
            background: url({{asset('/images/video-backgroud.jpg')}});
            background-repeat: no-repeat;
            background-size:100%;
        }
    </style>
</head>
<body class="background">
<div style="text-align: center;padding: 100px">
    <iframe width="70%" height="500px" src="https://www.youtube.com/embed/{{$main->video}}" title="YouTube video player"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen></iframe>
</div>
</body>
</html>
