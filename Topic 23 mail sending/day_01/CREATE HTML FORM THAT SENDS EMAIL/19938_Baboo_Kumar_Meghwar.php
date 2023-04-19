<?php
// echo "tesing";
?>

<!Doctype html>
<html>

<head>
    <link rel="stylesheet" href="style.css">
    <title>Email Sending</title>
</head>

<body>
    <center>
        <h1>Email Sending</h1>
    </center>
    <center>
        <form action="#" method="POST" style="width:50%">
            <fieldset>
                <legend>Send Email</legend>
                <table>
                    <tr>
                        <td>To : </td>
                        <td><input type="text" name="to" id="to"></td>
                    </tr>
                    <tr>
                        <td>Sub : </td>
                        <td><input type="text" name="sub" id="sub"></td>
                    </tr>
                    <tr>
                        <td>Message : </td>
                        <td><input type="text" name="message" id="message"></td>
                    </tr>
                    <tr>
                        <td>From : </td>
                        <td><input type="text" name="from" id="from"></td>
                    </tr>
                    <tr>
                        <td>Attachement : </td>
                        <td><input type="file" name="attachement" id="attachement"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" name="send" id="send" value="Send Mail" ></td>
                    </tr>
                </table>
            </fieldset>
        </form>
    </center>
</body>

</html>