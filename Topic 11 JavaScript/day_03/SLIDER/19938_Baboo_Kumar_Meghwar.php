<!doctype html>
<html>

<head>
    <title>Slider</title>
    <style>
        *{
            background-color: greenyellow;
        }

        #slider 
        {
            padding-top: 10px;
            height: 400px;
            width: 800px;
            margin: 0 auto;
        }

        #img {
            height: 100%;
            width: 100%;
            border:4px solid red;
            border-radius: 30px;
        }

        .btn {
            display: inline-block;
            background-color: #F39C12;
            color: #FFFFFF;
            padding: 12px 24px;
            margin-left:10px;
            font-size: 18px;
            font-weight: bold;
            border: none;
            border-radius: 4px;
            box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.25);
            transition: all 0.3s ease;
        }

        .btn:hover {
            background-color: #E67E22;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.25);
            transform: translateY(-2px);
        }
    </style>
</head>

<body>
    <div id="slider">
        <img src="img/a.png" id="img" />
    </div>
    <center>
        <br> <br>
        <button class="btn" onClick="previousImage()" id="prebtn"> Previous </button>
        <button class="btn" onClick="slider()" id="startbtn"> Start </button>
        <button class="btn" onClick="stopSlider()" id="stopbtn"> Stop </button>
        <button class="btn" onClick="nextImage()" id="nextbtn"> Next </button>
        <p style="color:blue; padding:10px; font-family:serif; font-size:30px; " >Developed By : Developer Baboo Kumar</p>
    </center>
    <script>
        var images = ['img/b.png', 'img/c.png', 'img/d.png', 'img/a.png'];
        var index = 0;
        var id;

        document.querySelector("#stopbtn").disabled = true;

        function slider() 
        {
            id = setInterval("startSlider()", 2000);
        }

        function startSlider() 
        {
            document.querySelector("#startbtn").disabled = true;
            document.querySelector("#stopbtn").disabled = false;
            index++;
            if (index == images.length) 
            {
                index = 0;
            }
            document.querySelector("#img").src = images[index];
        }

        function stopSlider() 
        {
            document.querySelector("#startbtn").disabled = false;
            document.querySelector("#stopbtn").disabled = true;
            clearInterval(id);
        }

        function nextImage() {
            index++;
            if (index == images.length) {
                index = 0;
            }
            document.querySelector("#img").src = images[index];
        }

        function previousImage() {
            index--;
            if (index <= 0) {
                index = images.length - 1;
            }
            document.querySelector("#img").src = images[index];
        }
    </script>
</body>
</html>