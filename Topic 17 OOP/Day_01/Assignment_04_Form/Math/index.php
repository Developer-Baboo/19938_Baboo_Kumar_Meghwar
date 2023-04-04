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
	<title>Math dpt</title>
</head>

<body>
	<center>
		<h1>Math dpt</h1>
		<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aspernatur rerum blanditiis soluta dolores repellendus harum obcaecati quaerat, mollitia, rem optio. Pariatur autem necessitatibus quas nisi, animi minus officia, consectetur corporis?</p>
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