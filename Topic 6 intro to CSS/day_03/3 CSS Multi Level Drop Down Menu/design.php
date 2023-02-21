<!doctype html>
<html>

<head>
    <title>UI DESIGNING</title>
    <link rel="stylesheet" type="text/css" href="./mystyle.css">
    <style>
        .main-navigation{
            font-weight: bold;
            font-size: 20px;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            /* foat:left */
        }
    </style>
</head>

<body bgcolor="lightblue">
    <p align="center" style="color: lightred; box-shadow: 0px; font-size: 30px; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; ">CSS Multilevel Dropdown Menu</p>
    <ul class="main-navigation">
        <li><a href="#">Home</a></li>
        <li><a href="#">Courses</a>
            <ul>
                <li><a href="#">PHP BASIC</a>
                    <ul>
                        <li><a href="#">HTML</a>
                            <ul>
                                <li><a href="#">elements</a></li>
                                <li><a href="#">forms</a></li>
                                <li><a href="#">tables</a></li>
                                <li><a href="#">get data</a></li>
                            </ul>

                        </li>
                        <li><a href="#">CSS</a></li>
                        <li><a href="#">JAVASCRIPT</a></li>
                        <li><a href="#">MYSQL</a>
                            <ul>
                                <li><a href="#">intro</a></li>
                                <li><a href="#">quries</a></li>
                                <li><a href="#">delete</a></li>
                                <li><a href="#">update</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><a href="#">Php advance</a>
                    <ul>
                        <li><a href="#">Larvael</a></li>
                        <li><a href="#">react</a></li>
                        <li><a href="#">rest api</a></li>
                        <!-- <li><a href="#">main nevigation</a></li> -->
                    </ul>
                </li>

                <li><a href="#">android (java)</a>
                    <ul>
                        <li><a href="#">variable</a></li>
                        <li><a href="#">data type</a></li>
                        <li><a href="#">real time projects</a></li>
                    </ul>
                </li>
            </ul>
        </li>


        <li><a href="#">WordPress</a>
            <ul>
                <li><a href="#">Themes</a></li>
                <li><a href="#">Plugins</a></li>
                <li><a href="#">Editing templates</a>
                    <ul>
                        <li><a href="#">CMS</a></li>
                        <li><a href="#">Website</a></li>
                    </ul>
                </li>
            </ul>
        </li>
        <li><a href="#">Networking</a>
            <ul>
                <li><a href="#">intro</a></li>
                <li><a href="#">routers</a></li>
                <li><a href="#">wireless</a> </li>
            </ul>
        </li>
    </ul>
</body>

</html>