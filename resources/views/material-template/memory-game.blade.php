<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/MemoryGame.css')}}"/>
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Anton"/>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <style>
        .modalGuide {
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
        .modalGuide-content {
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
        .modalGuide-header {
            padding: 2px 16px;;
            background-color: #5cb85c;
            color: white;
        }
        .btn-success {
            color: #fff;
            background-color: #5cb85c;
            border-color: #4cae4c;
        }
        .btn {
            display: inline-block;
            padding: 6px 12px;
            margin-bottom: 0;
            font-size: 14px;
            font-weight: 400;
            line-height: 1.42857143;
            text-align: center;
            white-space: nowrap;
            vertical-align: middle;
            -ms-touch-action: manipulation;
            touch-action: manipulation;
            cursor: pointer;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            background-image: none;
            border: 1px solid transparent;
            border-radius: 4px;
        }
    </style>
</head>
<body>
<!-- Guide-->
<div id="GuideModal" class="modalGuide" style="display: block">
    <!-- Modal content -->
    <div class="modalGuide-content" style="width: 40%;">
        <div class="modalGuide-header">
            <span class="close closeGuideModal" >&times;</span>
            <h2> Guid (Memory)</h2>
        </div>
        <div class="modalGuide-body" style="text-align: center">
            <p>Find the same cards
            </p>
            <p>Click to hear the sound</p>
        </div>
        <div class="modalGuide-footer" style="text-align: center">
            <button class="closeGuideModal btn btn-success">Get started</button>
        </div>
    </div>
</div>
<!-- End Guide-->
<div class="wrap" id="Game" >
    <div class="game"></div>
    <div class="modal-overlay">
        <div class="modal">
            <h2 class="winner">You Win!</h2>
            <div style="padding-left: 20px">
                <button class="restart">Play Again?</button>
                <a class="restart" href="{{$next}}">Continue <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
            </div>
        </div>
    </div>
</div><!-- End Wrap -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

<script>(function(){



        var Memory = {

            init: function(cards){
                this.$game = $(".game");
                this.$modal = $(".modal");
                this.$overlay = $(".modal-overlay");
                this.$restartButton = $("button.restart");
                this.cardsArray = $.merge(cards, cards);
                this.shuffleCards(this.cardsArray);
                this.setup();
            },

            shuffleCards: function(cardsArray){
                this.$cards = $(this.shuffle(this.cardsArray));
            },

            setup: function(){
                this.html = this.buildHTML();
                this.$game.html(this.html);
                this.$memoryCards = $(".card");
                this.paused = false;
                this.guess = null;
                this.binding();
            },

            binding: function(){
                this.$memoryCards.on("click", this.cardClicked);
                this.$restartButton.on("click", $.proxy(this.reset, this));
            },
            // kinda messy but hey
            cardClicked: function(){
                var _ = Memory;
                var $card = $(this);
                if(!_.paused && !$card.find(".inside").hasClass("matched") && !$card.find(".inside").hasClass("picked")){
                    $card.find(".inside").addClass("picked");
                    if(!_.guess){
                        _.guess = $(this).attr("data-id");
                    } else if(_.guess == $(this).attr("data-id") && !$(this).hasClass("picked")){
                        $(".picked").addClass("matched");
                        _.guess = null;
                    } else {
                        _.guess = null;
                        _.paused = true;
                        setTimeout(function(){
                            $(".picked").removeClass("picked");
                            Memory.paused = false;
                        }, 600);
                    }
                    if($(".matched").length == $(".card").length){
                        _.win();
                    }
                }
            },

            win: function(){
                this.paused = true;
                votay.play();
                setTimeout(function(){
                    Memory.showModal();
                    Memory.$game.fadeOut();
                }, 1000);
            },

            showModal: function(){
                this.$overlay.show();
                this.$modal.fadeIn("slow");
            },

            hideModal: function(){
                this.$overlay.hide();
                this.$modal.hide();
            },

            reset: function(){
                this.hideModal();
                this.shuffleCards(this.cardsArray);
                this.setup();
                this.$game.show("slow");
            },

            // Fisher--Yates Algorithm -- https://bost.ocks.org/mike/shuffle/
            shuffle: function(array){
                var counter = array.length, temp, index;
                // While there are elements in the array
                while (counter > 0) {
                    // Pick a random index
                    index = Math.floor(Math.random() * counter);
                    // Decrease counter by 1
                    counter--;
                    // And swap the last element with it
                    temp = array[counter];
                    array[counter] = array[index];
                    array[index] = temp;
                }
                return array;
            },


            buildHTML: function(){
                var frag = '';
                this.$cards.each(function(k, v){
                    frag += `<div onclick="PlayVoiceImages('`+v.voice+`')"  class="card" data-id="`+ v.id +`"><div class="inside">\
        <div class="front">\
        `+ v.img +`\
        </div>\
        <div class="back"><img src="https://res.cloudinary.com/thangdao04/image/upload/v1630303243/g2y8chmwfp0vdklngvo6.png"\
        alt="Codepen" /></div></div>\
        </div>`;
                });
                return frag;
            }
        };


        //128 <img src="'+ v.img +'" alt="'+ v.name +'" >

        var cards = [
                @foreach($list as $data)

            {
                name: '{{$data->values}}',
                img: `<img  src="{{$data->images}}" alt="{{$data->values}}" >`,
                id: {{$data->id}},
                voice:"{{$data->voice}}",
            },
            {{--{--}}
            {{--    name: '{{$data->values}}',--}}
            {{--    img: '<div style="font-size: 50px;text-transform: capitalize;color: {{$data->color}}">{{$data->values}}</div>',--}}
            {{--    id: {{$data->id}},--}}
            {{--    voice:"{{$data->voice}}",--}}
            {{--},--}}
                @endforeach
            // {
            //     name: "php",
            //     img: '<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/74196/php-logo_1.png" alt="php" >',
            //     id: 1,
            // },
            // {
            //     name: "php",
            //     img: '<div style="font-size: 50px;color: yellow">php</div>',
            //     id: 1
            // },
            // {
            //     name: "html5",
            //     img: '<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/74196/html5-logo.png" alt="html5" >',
            //     id: 2
            // },
            // {
            //     name: "html5",
            //     img: '<div style="font-size: 50px;color: yellow">html5</div>',
            //     id: 2
            // },
            // {
            //     name: "javascript",
            //     img: '<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/74196/js-logo.png" alt="javascript" >',
            //     id: 3
            // },
            // {
            //     name: "javascript",
            //     img: '<div style="font-size: 50px;color: yellow">javascript</div>',
            //     id: 3
            // },
        ];

        Memory.init(cards);


    })();
</script>
<script>
    var modalGuide = document.getElementById("GuideModal");
    var Game = document.getElementById("Game");
    Game.style.display = "none";

    // var btnClose = document.getElementById("CloseGuideModal");
    //
    // btnClose.onclick = function() {
    //     modalGuide.style.display = "none";
    // }
    $(".closeGuideModal").click(function (){
        modalGuide.style.display = "none";
        Game.style.display = "block";

    })
    var votay = new Audio('https://res.cloudinary.com/thangdao04/video/upload/v1631479726/mxwczvywj4nd7ewsyk8h.mp3');
    votay.volume = 0.5;
    function PlayVoiceImages(url) {
        var audioImg = new Audio(url);
        audioImg.play();
    }

</script>

</body>
</html>
