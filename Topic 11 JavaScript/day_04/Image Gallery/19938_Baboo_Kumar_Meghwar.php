<!DOCTYPE html>
<html>

<head>
    <title>Image Gallery</title>
    <style>
        h1 {
            font-family: cursive;
            background-color: lightseagreen;
            border-radius: 10px;
            border: 2px groove yellowgreen;
            padding: 5px;
            margin: 3px;
        }

        .row {
            clear: both;
            display: flex;
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            background-color: gray;
        }

        .col-2 {
            float: left;
            width: 16.66%;
            margin-left: 23px;
            margin-bottom: 15px;
            margin-top: 15px;
            margin-right: 20px;
        }

        h1 {
            text-align: center;
            padding: 20px;
            font-size: 50;
            font-weight: bold;
        }

        img {
            border: 5px solid yellow;
            border-radius: 40px;
            /* margin-right: -10px; */
            /* margin-left:2px */
        }

        .lightbox {
            background: skyblue;
            height: 400px;
            text-align: center;
            display: none;
        }

        #lightbox_image {
            position: relative;
            width: 80%;
            border: 5px solid red;
            border-radius: 40px;
        }

        .close_btn {
            position: absolute;
            z-index: 999;
        }

        img:hover {
            cursor: pointer;
        }
    </style>
</head>

<body>
    <center>
        <h1>Image Gallery Using Light Box </h1>
    </center>

    <div class="row" class="row_images">
        <div class="col-2">
            <img src="./images/a.jpg" onclick="open_lightbox(this);" alt="flower image here" height="100%" width="100%">
        </div>
        <div class="col-2">
            <img src="./images/b.png" onclick="open_lightbox(this);" alt="flower image here" height="100%" width="100%">
        </div>
        <div class="col-2">
            <img src="./images/c.jpeg" onclick="open_lightbox(this);" alt="flower image here" height="100%" width="100%">
        </div>
        <div class="col-2">
            <img src="./images/d.png" onclick="open_lightbox(this);" alt="flower image here" height="100%" width="100%">
        </div>
        <div class="col-2">
            <img src="./images/e.jpg" onclick="open_lightbox(this);" alt="flower image here" height="100%" width="100%">
        </div>
    </div>

    <div class="row" class="row_images">
        <div class="col-2">
            <img src="./images/f.jpeg" onclick="open_lightbox(this);" alt="flower image here" height="100%" width="100%">
        </div>
        <div class="col-2">
            <img src="./images/g.jpeg" onclick="open_lightbox(this);" alt="flower image here" height="100%" width="100%">
        </div>
        <div class="col-2">
            <img src="./images/h.png" onclick="open_lightbox(this);" alt="flower image here" height="100%" width="100%">
        </div>
        <div class="col-2">
            <img src="./images/i.jpeg" onclick="open_lightbox(this);" alt="flower image here" height="100%" width="100%">
        </div>
        <div class="col-2">
            <img src="./images/j.png" onclick="open_lightbox(this);" alt="flower image here" height="100%" width="100%">
        </div>
    </div>
    <div class="row" class="row_images">
        <div class="col-2">
            <img src="./images/k.jpg" onclick="open_lightbox(this);" alt="flower image here" height="100%" width="100%">
        </div>
        <div class="col-2">
            <img src="./images/l.jpg" onclick="open_lightbox(this);" alt="flower image here" height="100%" width="100%">
        </div>
        <div class="col-2">
            <img src="./images/m.jpeg" onclick="open_lightbox(this);" alt="flower image here" height="100%" width="100%">
        </div>
        <div class="col-2">
            <img src="./images/o.jpeg " onclick="open_lightbox(this);" alt="flower image here" height="100%" width="100%">
        </div>
        <div class="col-2">
            <img src="./images/p.jpg" onclick="open_lightbox(this);" alt="flower image here" height="100%" width="100%">
        </div>
    </div>

    <div class="lightbox">
        <button class="close_btn" onclick="close_lightbox()">X</button>
        <img src="images/a.jpg" style="height: 400px;" id="lightbox_image">
    </div>
    <center>
        <h1>Developed By : Developer Baboo Kumar 19938 </h1>
    </center>

</body>
<script type="text/javascript">
    function open_lightbox(obj) {
        var lightbox_image = document.getElementById("lightbox_image");
        var row_images = document.querySelectorAll(".row_images");
        lightbox_image.src = obj.src;


        for (var i = 0; i < row_images.length; i++) {
            row_images[i].style.display = "none";
        }
        var light_box = document.querySelector(".lightbox");
        light_box.style.display = "block";


    }

    function close_lightbox() {
        var row_images = document.querySelectorAll(".row_images");
        var light_box = document.querySelector(".lightbox");
        light_box.style.display = "none";
        for (var i = 0; i < row_images.length; i++) {
            row_images[i].style.display = "flex";
        }
    }
</script>

</html>