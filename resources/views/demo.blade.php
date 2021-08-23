<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body style="background-color: blue">

<img style="width: 100px;" src="/images/{{$data->images}}" onclick="playAudio()" id="img" alt="">
<div>value {{$data->value}} </div>
<div>id {{$data->id}}</div>
<audio id="myAudio" style="display: none">
    <source src="/voice/en/{{$data->voice_en}}" type="audio/ogg">
</audio>
<div>
    <iframe width="560" height="315" src="" title="YouTube video player"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen>
    </iframe>
</div>
<script>
    // jQuery(window).load(function () {
    //
    //     setTimeout(function () {
    //         alert('page is loaded and 1 minute has passed');
    //     }, 60000);
    // });
    // alert('page is loaded');
    var voice = document.getElementById('myAudio');
    var img = document.getElementById('img');

    function playAudio() {
        voice.play();
    }
</script>
</body>
</html>
