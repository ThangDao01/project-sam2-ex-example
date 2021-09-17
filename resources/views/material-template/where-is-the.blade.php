<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E&K-Where Is The</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Luckiest+Guy&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        * {
            font-family: 'Luckiest Guy', cursive;
            /*color: white;*/
        }

        body {
            background-image: url("{{asset('/images/bk-material1.png')}}");
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }

        @import url(http://fonts.googleapis.com/css?family=Calibri:400,300,700);


        .mt-100 {
            margin-top: 100px
        }

        .container {
            margin-top: 200px
        }

        .card {
            position: relative;
            display: flex;
            width: 450px;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: border-box;
            border: 1px solid #d2d2dc;
            border-radius: 4px;
            -webkit-box-shadow: 0px 0px 5px 0px rgb(249, 249, 250);
            -moz-box-shadow: 0px 0px 5px 0px rgba(212, 182, 212, 1);
            box-shadow: 0px 0px 5px 0px rgb(161, 163, 164)
        }

        .card .card-body {
            padding: 1rem 1rem
        }

        .card-body {
            flex: 1 1 auto;
            padding: 1.25rem
        }

        p {
            font-size: 14px
        }

        h4 {
            margin-top: 18px
        }

        .cross {
            padding: 10px;
            color: #d6312d;
            cursor: pointer
        }

        .continue:focus {
            outline: none
        }

        .continue {
            border-radius: 5px;
            text-transform: capitalize;
            font-size: 13px;
            padding: 8px 19px;
            cursor: pointer;
            color: #fff;
            background-color: #D50000
        }

        .continue:hover {
            background-color: #D32F2F !important
        }
        .modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top */
            padding-top: 100px; /* Location of the box */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            background-color: rgb(0,0,0); /* Fallback color */
            background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
        }

        /* Modal Content */
        .modal-content {
            background-color: #fefefe;
            margin: auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
        }

        /* The Close Button */
        .close {
            color: #aaaaaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: #000;
            text-decoration: none;
            cursor: pointer;
        }
        .modal-header {
            padding: 2px 16px;;
            background-color: #5cb85c;
            color: white;
        }
    </style>
</head>
<body>
<!-- Guide-->
<div id="GuideModal" class="modal" style="display: block">
    <!-- Modal content -->
    <div class="modal-content" style="width: 40%;">
        <div class="modal-header">
            <span class="close closeGuideModal" >&times;</span>
            <h2> Guid (Question)</h2>
        </div>
        <div class="modal-body">
            <p>Find the correct answer of question</p>
            <p>click to hear the sound</p>
        </div>
        <div class="modal-footer" style="text-align: center">
            <button class="closeGuideModal btn btn-success">Get started</button>
        </div>
    </div>
</div>
<!-- End Guide-->


<div class="col-12 text-center" id="Game" style="padding-top: 70px;display: none">
    <div class="container col-8">
        <div class="row">
            <div class="col-lg-12" style="font-size: 30px;text-align: center;color: white" id="question">where is
                the {{$main-> values}} ? <i class="fa fa-volume-up" onclick="PlayVoice()"></i></div>
            @foreach($list as $data)
                <div class="col-sm-4">
                    <audio id="voice-{{$data->id}}" style="display: none">
                        <source src="{{$data->voice}}" type="audio/ogg">
                    </audio>
                    <img onclick="PlayVoiceImages('{{$data->voice}}')" style="width: 100px;height: 150px;" id="img-{{$data->id}}" src="{{$data->images}}"
                         alt=""
                         @if($data->id == $main->id)
                         data-toggle="modal" data-target="#myModal"
                        @endif
                    >
                    <div class="modal" id="myModal" data-backdrop="false" role="dialog">
                        <div class="modal-dialog">
                            <div class="card">
                                <div class="text-right cross"><i class="fa fa-times"></i></div>
                                <div class="card-body text-center"><img
                                        src="https://img.icons8.com/bubbles/200/000000/trophy.png">
                                    <h4>CONGRATULATIONS!</h4>
                                    <p>Congratulations on successfully completing the lesson</p>
                                    <a href="{{$next}}">
                                    <button class="btn btn-out btn-square continue">CONTINUE</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script>
    var modalGuide = document.getElementById("GuideModal");
    var Game = document.getElementById("Game");

    // var btnClose = document.getElementById("CloseGuideModal");
    //
    // btnClose.onclick = function() {
    //     modalGuide.style.display = "none";
    // }
    $(".closeGuideModal").click(function (){
        modalGuide.style.display = "none";
        Game.style.display = "block";

    })


    function sleep(ms) {
        return new Promise((resolve) => setTimeout(resolve, ms));
    }
    function PlayVoice() {
        var audio = new Audio("{{$main->voice}}");
        audio.play();
    }
    function PlayVoiceImages(url) {
        var audioImg = new Audio(url.toString());
        audioImg.play();
    }

    var q = document.getElementById('question');
    q.onload = function () {
        alert(1);
    }
    var cong = document.getElementById('img-{{$main->id}}');
    cong.setAttribute("style", "data-toggle='modal';data-target='#myModal';width: 100px;height: 150px;");
    $(document).ready(function () {
        setTimeout(() => {  }, 10000);
    });
</script>
<script type="text/javascript">
    $(window).on('load', function() {
        $('#modalAbandonedCart').style.display="block";
    });
</script>
</body>
</html>
