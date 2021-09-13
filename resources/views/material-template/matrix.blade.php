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

        .no:hover{
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
        .td-data{

        }
        .td-data-1{
            background-color: #52d4fc;
            height: 100px;
            width: 100px;
        }
        .td-data-2{
            background-color: #07a7db;
            height: 100px;
            width: 100px;
        }
        .td-none{
            background-color: yellow;
            /*border: yellow solid 5px;*/
            height: 100px;
            width: 100px;
        }
        table{

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
                background:  #bbdefb;
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
    </style>
    @include('layout.css')
</head>
<body>
<div class="col-12" style="text-align: center;margin-top: 50px">
    <table class="col-8" style="margin: auto">
        <tr>
            <td class="td-none"></td>
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
            <td class="td-none ends"></td>
        </tr>
    </table>

</div>
<div class="modal fade" id="myModal" role="dialog">
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
<script>
    var tdData = $(".td-data");
    var randomMatrix = Math.floor(Math.random() * (3));
    var as2D = [[
         1,1,0,0,0,
         0,1,0,0,0,
         0,1,1,0,0,
         0,0,1,0,0,
         0,0,1,1,1,
    ],[
        1,1,1,1,0,
        0,0,0,1,0,
        0,1,1,1,0,
        0,1,0,0,0,
        0,1,1,1,1,
    ],[
        1,1,1,0,0,
        0,0,1,0,0,
        0,0,1,1,1,
        0,0,0,0,1,
        0,0,0,0,1,
    ]];
    var correct=0;
    var correctMax=0;
    var currantCorrect = [];
    var x = document.body;
    var color = ["blue", "green", "yellow", "red"];

    // console.log(div.innerHTML);

    $(document).ready(function(){

        for (let i = 0; i < tdData.length; i++) {
            if (as2D[randomMatrix][i]===1){
                tdData[i].innerHTML= `<img src="https://res.cloudinary.com/thangdao04/image/upload/v1630141938/dfio6avjzqi9vy6jibrm.png" class="ok" style="width: 50px" alt="">`;
                correctMax++;
                currantCorrect[currantCorrect.length]=i;
            }
            if (as2D[randomMatrix][i]===0){
                tdData[i].innerHTML= `<img src="https://res.cloudinary.com/thangdao04/image/upload/v1630141975/ogggb4gnvaroqz10rtmy.png" class="no link buzz-out-on-hover" style="width: 50px" alt="">`;
            }
        }
        $(".ok").hover(function() {
            // alert(this.indexOf($(".ok")));
            // alert(this.indexOf(ListCorrect));

                if (this.parentNode.style.backgroundColor == ''){
                    correct++;
                }
                this.parentNode.style.backgroundColor= 'yellow';
                this.classList.remove("ok");
            });
        $(".no")
            .hover(function() {
                // $(this).addClass( "block" );
            });
        $(".ends")
            .hover(function(){
                if(correct>=correctMax){
                    Clap.play();
                    // $("#myModal").parentNode.style.display='block';
                }
            });
    });
    var Clap = new Audio('https://res.cloudinary.com/thangdao04/video/upload/v1631479726/mxwczvywj4nd7ewsyk8h.mp3');
    Clap.volume = 0.5;
    var ListCorrect =$(".ok");
    alert(ListCorrect[0].html);

</script>
</body>
</html>
