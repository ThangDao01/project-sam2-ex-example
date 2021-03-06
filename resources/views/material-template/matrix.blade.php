<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <style>

        .no:hover {
            text-decoration: none;
            color: #000;
        }

        /*====================*/
        /* BUZZ OUT
        /*====================*/

        @-webkit-keyframes buzz-out-on-hover {
            10% {
                -webkit-transform: translateX(3px) rotate(2deg);
                transform: translateX(3px) rotate(2deg);
            }
            20% {
                -webkit-transform: translateX(-3px) rotate(-2deg);
                transform: translateX(-3px) rotate(-2deg);
            }
            30% {
                -webkit-transform: translateX(3px) rotate(2deg);
                transform: translateX(3px) rotate(2deg);
            }
            40% {
                -webkit-transform: translateX(-3px) rotate(-2deg);
                transform: translateX(-3px) rotate(-2deg);
            }
            50% {
                -webkit-transform: translateX(2px) rotate(1deg);
                transform: translateX(2px) rotate(1deg);
            }
            60% {
                -webkit-transform: translateX(-2px) rotate(-1deg);
                transform: translateX(-2px) rotate(-1deg);
            }
            70% {
                -webkit-transform: translateX(2px) rotate(1deg);
                transform: translateX(2px) rotate(1deg);
            }
            80% {
                -webkit-transform: translateX(-2px) rotate(-1deg);
                transform: translateX(-2px) rotate(-1deg);
            }
            90% {
                -webkit-transform: translateX(1px) rotate(0);
                transform: translateX(1px) rotate(0);
            }
            100% {
                -webkit-transform: translateX(-1px) rotate(0);
                transform: translateX(-1px) rotate(0);
            }
        }

        @keyframes buzz-out-on-hover {
            10% {
                -webkit-transform: translateX(3px) rotate(2deg);
                transform: translateX(3px) rotate(2deg);
            }
            20% {
                -webkit-transform: translateX(-3px) rotate(-2deg);
                transform: translateX(-3px) rotate(-2deg);
            }
            30% {
                -webkit-transform: translateX(3px) rotate(2deg);
                transform: translateX(3px) rotate(2deg);
            }
            40% {
                -webkit-transform: translateX(-3px) rotate(-2deg);
                transform: translateX(-3px) rotate(-2deg);
            }
            50% {
                -webkit-transform: translateX(2px) rotate(1deg);
                transform: translateX(2px) rotate(1deg);
            }
            60% {
                -webkit-transform: translateX(-2px) rotate(-1deg);
                transform: translateX(-2px) rotate(-1deg);
            }
            70% {
                -webkit-transform: translateX(2px) rotate(1deg);
                transform: translateX(2px) rotate(1deg);
            }
            80% {
                -webkit-transform: translateX(-2px) rotate(-1deg);
                transform: translateX(-2px) rotate(-1deg);
            }
            90% {
                -webkit-transform: translateX(1px) rotate(0);
                transform: translateX(1px) rotate(0);
            }
            100% {
                -webkit-transform: translateX(-1px) rotate(0);
                transform: translateX(-1px) rotate(0);
            }
        }

        .buzz-out-on-hover {
            display: inline-block;
            vertical-align: middle;
            -webkit-transform: perspective(1px) translateZ(0);
            transform: perspective(1px) translateZ(0);
            box-shadow: 0 0 1px rgba(0, 0, 0, 0);
        }

        .buzz-out-on-hover:hover, .buzz-out-on-hover:focus, .buzz-out-on-hover:active {
            -webkit-animation-name: buzz-out-on-hover;
            animation-name: buzz-out-on-hover;
            -webkit-animation-duration: 0.75s;
            animation-duration: 0.75s;
            -webkit-animation-timing-function: linear;
            animation-timing-function: linear;
            -webkit-animation-iteration-count: 1;
            animation-iteration-count: 1;
        }

        .td-data {

        }

        .td-data-1 {
            background-color: #52d4fc;
            height: 100px;
            width: 100px;
        }

        .td-data-2 {
            background-color: #07a7db;
            height: 100px;
            width: 100px;
        }

        .td-none {
            background-color: yellow;
            /*border: yellow solid 5px;*/
            height: 100px;
            width: 100px;
        }

        .finish {
        }

        table {

        }

        html, body {
            width: 100%;
            height: 100%;
        }

        @keyframes color-animation {
            0% {
                background: red;
            }
            25% {
                background: #ff0000b5;
            }
            50% {
                background: #bbdefb;
            }
            75% {
                background: #ff0000b5;
            }
            100% {
                background: red;
            }
        }

        .block {
            position: relative;
            animation-name: color-animation;
            animation-duration: 5s;
        }

        .cross {
            padding: 10px;
            color: #d6312d;
            cursor: pointer
        }

        @keyframes jump {
            0% {
                transform: translate3d(0, 0, 0) scale3d(1, 1, 1);
            }
            40% {
                transform: translate3d(0, 20%, 0) scale3d(.7, 1.3, 1);
            }
            100% {
                transform: translate3d(0, 30%, 0) scale3d(1.1, .5, 1);
            }
        }

        .jump {
            transform-origin: 50% 50%;
            animation: jump .5s linear alternate infinite;
        }

        /* For demo: */
        body {
            text-align: center;
        }

        .container {
            margin-top: 200px
        }

        .card {
            margin: auto;
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
            background-color: rgb(0, 0, 0); /* Fallback color */
            background-color: rgba(0, 0, 0, 0.4); /* Black w/ opacity */
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

        .btn-success {
            color: #fff;
            background-color: #5cb85c;
            border-color: #4cae4c;
        }

    </style>
    @include('layout.css')

</head>
<body>
<div class="card" id="cong" style="display: none">
    <div class="text-right cross"><i class="fa fa-times"></i></div>
    <div class="card-body text-center"><img src="https://img.icons8.com/bubbles/200/000000/trophy.png">
        <h4>CONGRATULATIONS!</h4>
        <p>Congratulations on successfully completing the lesson</p>
        <a href="{{$next}}">
            <button class="btn btn-out btn-square continue">CONTINUE</button>
        </a>
    </div>
</div>
<!-- Guide-->
<div id="GuideModal" class="modal" style="display: block">
    <!-- Modal content -->
    <div class="modal-content" style="width: 40%;">
        <div class="modal-header">
            <span class="close closeGuideModal">&times;</span>
            <h2> Guid (Matrix)</h2>
        </div>
        <div class="modal-body">
            <p>Find the way to the destination <img
                    src="https://res.cloudinary.com/thangdao04/image/upload/v1631696934/pbyxwa65t9thdhj6kvhf.png"
                    style="width: 50px;"> <br> with images <img src="{{$main->images}}" style="width: 50px" alt=""></p>
        </div>
        <div class="modal-footer" style="text-align: center">
            <button class="closeGuideModal btn btn-success">Get started</button>
        </div>
    </div>
</div>
<!-- End Guide-->
<div class="col-12" style="text-align: center;margin-top: 50px;display: block" id="matrixBox">
    <table class="col-8" style="margin: auto">
        <tr>
            <td class="td-none">
                <i style="font-size: 100px;" class="fa fa-arrow-right" aria-hidden="true"></i>
            </td>
            <td class="td-data-1 td-data"></td>
            <td class="td-data-2 td-data"></td>
            <td class="td-data-1 td-data"></td>
            <td class="td-data-2 td-data"></td>
            <td class="td-data-1 td-data"></td>
        </tr>
        <tr>
            <td></td>
            <td class="td-data-2 td-data"></td>
            <td class="td-data-1 td-data"></td>
            <td class="td-data-2 td-data"></td>
            <td class="td-data-1 td-data"></td>
            <td class="td-data-2 td-data"></td>
        </tr>
        <tr>
            <td></td>
            <td class="td-data-1 td-data"></td>
            <td class="td-data-2 td-data"></td>
            <td class="td-data-1 td-data"></td>
            <td class="td-data-2 td-data"></td>
            <td class="td-data-1 td-data"></td>
        </tr>
        <tr>
            <td></td>
            <td class="td-data-2 td-data"></td>
            <td class="td-data-1 td-data"></td>
            <td class="td-data-2 td-data"></td>
            <td class="td-data-1 td-data"></td>
            <td class="td-data-2 td-data"></td>
        </tr>
        <tr>
            <td></td>
            <td class="td-data-1 td-data"></td>
            <td class="td-data-2 td-data"></td>
            <td class="td-data-1 td-data"></td>
            <td class="td-data-2 td-data"></td>
            <td class="td-data-1 td-data"></td>
            <td class="td-none ends finish" id="end">
                <img data-toggle='modal' data-target='#myModal'
                     src="https://res.cloudinary.com/thangdao04/image/upload/v1631696934/pbyxwa65t9thdhj6kvhf.png"
                     style="width: 100px;margin: 0" alt="">
            </td>
        </tr>
    </table>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

<script>
    var modalGuide = document.getElementById("GuideModal");
    var Game = document.getElementById("matrixBox");
    Game.style.display = "none";

    // var btnClose = document.getElementById("CloseGuideModal");
    //
    // btnClose.onclick = function() {
    //     modalGuide.style.display = "none";
    // }
    $(".closeGuideModal").click(function () {
        modalGuide.style.display = "none";
        Game.style.display = "block";
    })
    var tdData = $(".td-data");
    var randomMatrix = Math.floor(Math.random() * (3));
    var as2D = [[
        1, 1, 0, 0, 0,
        0, 1, 0, 0, 0,
        0, 1, 1, 0, 0,
        0, 0, 1, 0, 0,
        0, 0, 1, 1, 1,
    ], [
        1, 1, 1, 1, 0,
        0, 0, 0, 1, 0,
        0, 1, 1, 1, 0,
        0, 1, 0, 0, 0,
        0, 1, 1, 1, 1,
    ], [
        1, 1, 1, 0, 0,
        0, 0, 1, 0, 0,
        0, 0, 1, 1, 1,
        0, 0, 0, 0, 1,
        0, 0, 0, 0, 1,
    ]];
    var correct = 0;
    var correctMax = 0;
    var currantCorrect = [];
    var x = document.body;
    var color = ["blue", "green", "yellow", "red"];
    var Clap = new Audio('https://res.cloudinary.com/thangdao04/video/upload/v1631479726/mxwczvywj4nd7ewsyk8h.mp3');
    Clap.volume = 0.5;
    var cong = document.getElementById('cong');
    var matrixBox = document.getElementById('matrixBox');
    // cong.setAttribute("style", "data-toggle='modal';data-target='#EndModal';");
    var ListCorrect = $(".ok");
    var cards = [
            @foreach($list as $data)

        {
            name: '{{$data->values}}',
            img: "{{$data->images}}",
            id: {{$data->id}},
            voice: "{{$data->voice}}",
        },
        @endforeach
    ];
    // console.log(div.innerHTML);

    $(document).ready(function () {
        for (let i = 0; i < tdData.length; i++) {
            if (as2D[randomMatrix][i] === 1) {
                tdData[i].innerHTML = `<img src="{{$main->images}}" class="ok" style="width: 50px" alt="{{$main->value}}">`;
                correctMax++;
                currantCorrect[currantCorrect.length] = i;
            }
            if (as2D[randomMatrix][i] === 0) {
                var ranD = Math.floor(Math.random() * 2);
                tdData[i].innerHTML = `<img src="`+cards[ranD].img+`" class="no link buzz-out-on-hover" style="width: 50px" alt="`+cards[ranD].name+`">`;
            }
        }

        $(".ok").click(function () {
            // alert(this.indexOf($(".ok")));
            // alert(this.indexOf(ListCorrect));

            if (this.parentNode.style.backgroundColor == '') {
                correct++;
            }
            this.parentNode.style.backgroundColor = 'yellow';
            // alert(this.parentNode.innerHTML);
            // this.$("img:first").addClass("jump");
            this.classList.add("jump");
            $(this).classList.remove("ok");
        });
        $(".no")
            .click(function () {
                // $(this).addClass( "block" );
            });
        $(".ends").click(function () {
            if (correct >= correctMax) {
                cong.style.display = 'block';
                matrixBox.style.display = 'none';

                Clap.play();
            }
        });
    });


</script>
</body>
</html>
