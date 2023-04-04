<?php

require_once("../require/forms.php");
require_once("../require/change_password_form.php");
require_once("../require/forget_password.php");
require_once("../require/signup_form.php");
$form = new Forms;
$change_password = new ChangePassword;
$forget_password = new ForgetPassword;
$signup_form = new SigupForms;
?>
<!DOCTYPE html>
<html>

<head>
    <title>IT dpt</title>
</head>

<body>
    <center>
        <h1>It dpt</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo, reprehenderit sint. Quod similique saepe quia nisi totam, distinctio ipsa amet adipisci exercitationem, necessitatibus dolorum eum, consequuntur, aperiam animi quaerat inventore!</p>
    </center>
    <?php
    $form->set_action("#");
    $form->set_method("POST");
    $form->login_form();

    $change_password->set_action("#");
    $change_password->set_method("POST");
    $change_password->change_password_form();

    $forget_password->set_action("#");
    $forget_password->set_method("POST");
    $forget_password->forgot_password_form();

    $signup_form->set_action("#");
    $signup_form->set_method("POST");
    $signup_form->signup_form();
    ?>

</body>

</html>