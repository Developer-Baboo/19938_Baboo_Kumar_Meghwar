
<style type="text/css">
	th{
		background-color: blue;
		color: white;
	}
</style>

<?php

if (isset($_REQUEST['register'])) {
	 echo "<pre>";
	   print_r($_REQUEST);
	 echo "</pre>";
	 // die();
	$alpha_pattern     = "/^[A-Z]{1}[a-z]{2,}$/";
	$email_pattern     = "/^[a-z]{2,6}[0-9]{1,3}[@][a-z]{5,8}[.][a-z]{2,5}$/";
	$cnic_pattern      = "/^\d{5}[-][0-9]{7}-\d{1}$/";
	$phone_num_pattern = "/^[0-9]{2}\d{3}[ ][0-9]{7}$/";
	extract($_REQUEST);

	// echo $first_name = $_REQUEST['first_name'];
	// echo $first_name;
	$flag = true;
	$error_msg = null;

	if ($first_name == "") {
		$flag = false;
		$error_msg.="<li>Please Enter First Name !...</li>";
	}else{

		if( !preg_match($alpha_pattern, $first_name) ){
			$flag = false;
		    $error_msg.="<li>First Name must be like eg : Sherry !...</li>";
		}
	}

	if ($middle_name != "") {

		if( !preg_match($alpha_pattern, $middle_name) ){
			$flag = false;
		    $error_msg.="<li>Middle Name must be like eg : Santos !...</li>";
		}
	}

	if ($last_name == "") {
		$flag = false;
		$error_msg.="<li>Please Enter Last Name !...</li>";
	}else{

		if( !preg_match($alpha_pattern, $last_name) ){
			$flag = false;
		    $error_msg.="<li>Last Name must be like eg : Wilson !...</li>";
		}
	}

	if ($email == "") {
		$flag = false;
		$error_msg.="<li>Please Enter Email !...</li>";
	}else{

		if( !preg_match($email_pattern, $email) ){
			$flag = false;
		    $error_msg.="<li>Email must be like eg : sherry1@yahoo.com !...</li>";
		}
	}

	if (!isset($gender)) {
		$flag = false;
		    $error_msg.="<li>Please Select Gender !...</li>";
	}

	if ($cnic == "") {
		$flag = false;
		$error_msg.="<li>Please Enter CNIC Number !...</li>";
	}else{

		if( !preg_match($cnic_pattern, $cnic) ){
			$flag = false;
		    $error_msg.="<li>CNIC must be like eg : 41303-1234567-8 !...</li>";
		}
	}

	if ($phone_number == "") {
		$flag = false;
		$error_msg.="<li>Please Enter Phone Number !...</li>";
	}else{

		if( !preg_match($phone_num_pattern, $phone_number) ){
			$flag = false;
		    $error_msg.="<li>Phone Number must be like eg : 92300 1234567 !...</li>";
		}
	}

	if ($country == "") {
		$flag = false;
		$error_msg.="<li>Please Select Country !...</li>";
	}

	if (isset($policies)) {
		 // echo "<pre>";
		 //  print_r($policies);
		 // echo "</pre>";
		if(count($policies) != 4){
			$flag = false;
		    $error_msg.="<li>Please Select All Policies !...</li>";
		}
	}else{
		$flag = false;
		$error_msg.="<li>Please Select All Policies !...</li>";
	}


	if ($flag == false) {
		
		header("location:client_side_validation.php?message=".$error_msg);
	}else{?>

          <table border="2" style="width: 100%;height: 100px;text-align: center;background-color: lightblue">
          	<tr>
          		<th>First Name</th>
          		<?php echo $middle_name?"<th>Middle Name</th>":""; ?>
          		<th>Last Name</th>
          		<th>Email</th>
          		<th>Gender</th>
          		<th>CNIC</th>
          		<th>Phone Number</th>
          		<th>Country</th>
          		<th>Policies</th>
          	</tr>
          	<tr>
          		<td><?php echo $first_name; ?></td>
          		<?php echo $middle_name?"<td>$middle_name</td>":""; ?>
          		<td><?php echo $last_name; ?></td>
          		<td><?php echo $email; ?></td>
          		<td><?php echo $gender; ?></td>
          		<td><?php echo $cnic; ?></td>
          		<td><?php echo $phone_number; ?></td>
          		<td><?php echo $country; ?></td>
          		<td><?php echo $policies[0]."<br/>".$policies[1]."<br/>".$policies[2]."<br/>".$policies[3]; ?></td>
          	</tr>
          </table>
	<?php }
}


?>