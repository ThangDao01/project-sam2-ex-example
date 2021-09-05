<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        canvas {
            border: 1px solid black;
            width: 1000px;
            height: 1000px;
        }
    </style>
</head>
<body>
<button id="btn-delete">
    Delete
</button>

<h1>Drawing with mouse events</h1>
<div id="main">
    <canvas id="myPics" width="1000" height="1000"></canvas>
</div>
<script>

    // When true, moving the mouse draws on the canvas
    let isDrawing = false;
    let x = 0;
    let y = 0;

    const myPics = document.getElementById('myPics');
    const context = myPics.getContext('2d');
    var btn_delete = document.getElementById('btn-delete');
    var main = document.getElementById('main')
    btn_delete.onclick=function (){
        window.location('http://127.0.0.1:8000/paint');
    }

    // event.offsetX, event.offsetY gives the (x,y) offset from the edge of the canvas.

    // Add the event listeners for mousedown, mousemove, and mouseup
    myPics.addEventListener('mousedown', e => {
        x = e.offsetX;
        y = e.offsetY;
        isDrawing = true;
    });

    myPics.addEventListener('mousemove', e => {
        if (isDrawing === true) {
            drawLine(context, x, y, e.offsetX, e.offsetY);
            x = e.offsetX;
            y = e.offsetY;
        }
    });

    window.addEventListener('mouseup', e => {
        if (isDrawing === true) {
            drawLine(context, x, y, e.offsetX, e.offsetY);
            x = 0;
            y = 0;
            isDrawing = false;
        }
    });

    function drawLine(context, x1, y1, x2, y2) {
        context.beginPath();
        context.strokeStyle = 'black';
        context.lineWidth = 1;
        context.moveTo(x1, y1);
        context.lineTo(x2, y2);
        context.stroke();
        context.closePath();
    }
</script>
</body>
</html>
