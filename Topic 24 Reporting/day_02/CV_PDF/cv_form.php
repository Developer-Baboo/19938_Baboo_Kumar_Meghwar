<?php
// echo "tesing";
?>

<!Doctype html>
<html>

<head>
    <link rel="stylesheet" href="style.css">
    <title>Print CV in PDF </title>
</head>
<body>
    <center>
        <form action="cv_form_process.php" method="POST">
            <fieldset>
                <legend>CV in PDF</legend>
                <table>
                    <tr>
                        <td><label>Full Name : </label></td>
                        <td><input type="text" name="full_name" placeholder="Enter Your Full Name"></td>
                    </tr>
                    <tr>
                        <td><label>Your Role : </label></td>
                        <td><input type="text" name="role" placeholder="Enter Your Role"></td>
                    </tr>
                    <tr>
                        <td><label> Your Intro : </label></td>
                        <td><textarea name="brief_intro" id="brief_intro" cols="30" rows="3" placeholder="I am a qualified and professional
                        web developer with five years of experience in database adminstration and website design.
                        Strong creative and analytical skills. Team player with an eye for detail."></textarea></td>
                    </tr>
                    <tr>
                        <td><label> Your Skills : </label></td>
                        <td><textarea name="skills" id="skills" cols="30" rows="3" placeholder="HTML5, CSS3, ES6, FIREBASE, MYSQL, PHP, AJAX, BOOTSTRAP"></textarea></td>
                    </tr>
                    <tr>
                        <td>You Email:</td>
                        <td><input type="email" name="email" placeholder="Enter Your Email"></td>
                    </tr>
                    <tr>
                        <td>Your Phone No:</td>
                        <td><input type="text" name="phone_number" placeholder="Enter Your Phone Number"></td>
                    </tr>
                    <tr>
                        <td>Your Address :</td>
                        <td><textarea name="address" id="address" cols="30" rows="3" placeholder="E-33 Gulsitan e Sajjad Qasimabad Hyderabad"></textarea></td>
                    </tr>
                    <tr>
                        <td>Your Experience :</td>
                        <td><textarea name="experience" id="experience" cols="30" rows="3" placeholder=""></textarea></td>
                    </tr>
                    <tr>
                        <td>Your Education :</td>
                        <td><textarea name="education" id="education" cols="30" rows="3" placeholder=""></textarea></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" value="Send" name="Send"></td>
                    </tr>
                </table>
            </fieldset>
        </form>
    </center>
</body>
</html>