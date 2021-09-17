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
        body{
            text-align:center;
            background-color:#ffcc8e;
        }

        .button{
            position:relative;
            display:inline-block;
            margin:20px;
        }

        .button a{
            color:white;
            font-family:Helvetica, sans-serif;
            font-weight:bold;
            font-size:36px;
            text-align: center;
            text-decoration:none;
            background-color:#FFA12B;
            display:block;
            position:relative;
            padding:20px 40px;

            -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
            text-shadow: 0px 1px 0px #000;
            filter: dropshadow(color=#000, offx=0px, offy=1px);

            -webkit-box-shadow:inset 0 1px 0 #FFE5C4, 0 10px 0 #915100;
            -moz-box-shadow:inset 0 1px 0 #FFE5C4, 0 10px 0 #915100;
            box-shadow:inset 0 1px 0 #FFE5C4, 0 10px 0 #915100;

            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            border-radius: 5px;
        }

        .button a:active{
            top:10px;
            background-color:#F78900;

            -webkit-box-shadow:inset 0 1px 0 #FFE5C4, inset 0 -3px 0 #915100;
            -moz-box-shadow:inset 0 1px 0 #FFE5C4, inset 0 -3pxpx 0 #915100;
            box-shadow:inset 0 1px 0 #FFE5C4, inset 0 -3px 0 #915100;
        }

        .button:after{
            content:"";
            height:100%;
            width:100%;
            padding:4px;
            position: absolute;
            bottom:-15px;
            left:-4px;
            z-index:-1;
            background-color:#2B1800;
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            border-radius: 5px;
        }
    </style>
</head>
<body class="background">
<div style="text-align: center;padding: 100px">
    <iframe width="70%" height="500px" src="https://www.youtube.com/embed/{{$main->video}}" title="YouTube video player"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen></iframe>
    <div ontouchstart="">
        <div class="button">
            <a href="{{$next}}">Next lesson</a>
        </div>
    </div>
</div>

</body>
</html>
