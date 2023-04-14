<?php
// echo "tesing";
?>
<!Doctype html>
<html>

<head>
    <link rel="stylesheet" href="style.css">
    <title>AJAX EMAIL SYSTEM</title>
</head>

<body>
    <div style="border:3px solid blue; color:blue; font-size:30px " class="row">
        <div class="col-12">
            <center>
                <p>AJAX EMAIL SYSTEM (Fully Responsive) </p>
            </center>
        </div>
    </div>
    <div class="row">
        <div style="border:2px solid brown; " class="col-4">
            <ul style="list-style-type: none; ">
                <a href="./home_page.php">
                    <li>Compose</li>
                </a>
                <a href="./">
                    <li>Inbox</li>
                </a>
                <a href="">
                    <li>Sent</li>
                </a>
                <a href="">
                    <li>Trash</li>
                </a>
                <a href="">
                    <li>Draft</li>
                </a>
            </ul>
        </div>
        <div class=" col-8">
            <form action="">
                <fieldset>
                    <table>
                        <tr>
                            <td> <label for="">To : </label> </td>
                            <td><input type="text" name="to" id=""></td>

                        </tr>
                        <tr>
                            <td> <label for="">Sub : </label> </td>
                            <td>
                                <input type="text" name="sub" id="">
                            </td>

                        </tr>
                        <tr>
                            <td> <label for="">Cc : </label> </td>
                            <td><input type="text" name="cc" id=""></td>
                        </tr>
                        <tr>
                            <td> <label for="">Message : </label> </td>
                            <td><textarea name="message" id="" cols="30" rows="3"></textarea></td>
                        </tr>
                        <tr>
                            <!-- <td></td> -->
                            <td><input type="submit" value="Draft" name="draft" ></td>
                            <td><input type="submit" value="Send" name="send" ></td>
                        </tr>
                    </table>
                </fieldset>
            </form>
        </div>
    </div>
</body>

</html>