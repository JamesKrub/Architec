<head>
<meta charset="utf-8" />
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <title>Draw a rectangle!</title>
    <style>
        #canvas {
            width:800px;
            height:500px;
            border: 10px solid transparent;
            background-color: grey;
        }
        #canvas1 {
            width:800px;
            height:500px;
            border: 10px solid transparent;
            background-color: green;
        }
        .rectangle {
            border: 1px solid #FF0000;
            position: absolute;

        }
    </style>
</head>

<!-- <body onload="init();"> -->
<body> 
        <div  id="canvas1"> </div>
    <div id="canvas"> </div>

    <script>
    
    initDraw(document.getElementById('canvas'));

    function initDraw(canvas) {

        function setMousePosition(e) {
            var ev = e || window.event; //Moz || IE
            if (ev.pageX) { //Moz
                                         
                mouse.x = ev.pageX + window.pageXOffset;
                mouse.y = ev.pageY + window.pageYOffset;
            } else if (ev.clientX) { //IE
                mouse.x = ev.clientX + document.body.scrollLeft;
                mouse.y = ev.clientY + document.body.scrollTop;
            }
            // console.log(mouse.x+ ' ' + mouse.y);   
        };

        var mouse = {
            x: 0,
            y: 0,
            startX: 0,
            startY: 0
        };

        var element = null;

        canvas.onmousemove = function (e) {
            setMousePosition(e);
            if (element !== null) {
                element.style.width = Math.abs(mouse.x - mouse.startX) + 'px'; // x ขวามาก
                element.style.height = Math.abs(mouse.y - mouse.startY) + 'px'; // y ล่างมาก
                element.style.left = (mouse.x - mouse.startX < 0) ? mouse.x + 'px' : mouse.startX + 'px';
                element.style.top = (mouse.y - mouse.startY < 0) ? mouse.y + 'px' : mouse.startY + 'px';
            }
        }

        $('#canvas').click(function() {
        // canvas.onclick = function (e) {
            if (element !== null) {
                element = null;
                canvas.style.cursor = "default";
                console.log("finsihed.");
            } else {
                console.log("begun.");
                mouse.startX = mouse.x;
                mouse.startY = mouse.y;
                element = document.createElement('div');
                element.className = 'rectangle';
                element.id = '';
                element.classList.add("1");
                element.style.left = mouse.x + 'px';
                element.style.top = mouse.y + 'px';
                canvas.appendChild(element)
                // canvas.style.cursor = "crosshair";
            }
            ;
        });

    }
    </script>
    </body>
</html>