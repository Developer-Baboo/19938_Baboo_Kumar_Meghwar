<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <!-- Insert to your webpage before the </head> -->
    <script src="sliderengine/jquery.js"></script>
    <script src="sliderengine/amazingslider.js"></script>
    <link rel="stylesheet" type="text/css" href="sliderengine/amazingslider-1.css">
    <script src="sliderengine/initslider-1.js"></script>
    <!-- End of head section HTML codes -->
    <title>home</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link href="style.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/easySlider1.5.js"></script>
    <script type="text/javascript" charset="utf-8">
        // <![CDATA[
        $(document).ready(function() {
            $("#slider").easySlider({
                controlsBefore: '<p id="controls">',
                controlsAfter: '</p>',
                auto: true,
                continuous: true
            });
        });
        // ]]>
    </script>
    <style type="text/css">
        #slider {
            margin: 0;
            padding: 0;
            list-style: none;
        }

        #slider ul,
        #slider li {
            margin: 0;
            padding: 0;
            list-style: none;
        }

        /* 
    define width and height of list item (slide)
    entire slider area will adjust according to the parameters provided here
*/
        #slider li {
            width: 966px;
            height: 348px;
            overflow: hidden;
        }

        p#controls {
            margin: 0;
            position: relative;
        }

        #prevBtn,
        #nextBtn {
            display: block;
            margin: 0;
            overflow: hidden;
            width: 13px;
            height: 28px;
            position: absolute;
            left: -13px;
            top: -210px;
        }

        #nextBtn {
            left: 966px;
        }

        #prevBtn a {
            display: block;
            width: 13px;
            height: 28px;
            background: url(images/l_arrow.gif) no-repeat 0 0;
        }

        #nextBtn a {
            display: block;
            width: 13px;
            height: 28px;
            background: url(images/r_arrow.gif) no-repeat 0 0;
        }
    </style>
</head>

<body>
    <div class="main">
        <div class="header">
            <div class="block_header">
                <div class="logo"><b style="color:#FC0">SMART.</b><b style="color:#FFF">WEBDESIGN</b></div>
                <div class="Twitter">Follow us on Twitter</div>
                <div class="clr"></div>
                <div class="menu">
                    <ul>
                        <li><a href="index.php" class="active">Home</a></li>
                        <li><a href="services.php">Services</a></li>
                        <li><a href="portfolio.php
                        ">Portfolio</a></li>
                        <li><a href="about.php">About us</a></li>
                        <li><a href="contact.php">Contact us</a></li>
                    </ul>
                </div>
                <div class="clr"></div>
            </div>
        </div