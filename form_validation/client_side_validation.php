<!DOCTYPE html>
<html>
<head>
	<title>Client Side Validation</title>

	<style type="text/css">
		span{
			color: red;
		}
		li{
			color: red;
			list-style: none;
		}
	</style>
	<script type="text/javascript">
		function register_form(){
        //+92300 123567
			// alert("ok");
		var alpha_pattern = /^[A-Z]{1}[a-z]{2,}$/;
		var email_pattern = /^[a-z]{2,6}[0-9]{1,3}[@][a-z]{5,8}[.][a-z]{2,5}$/;
		var cnic_pattern      = /^\d{5}[-][0-9]{7}-\d{1}$/;
		var phone_num_pattern = /^[0-9]{2}\d{3}[ ][0-9]{7}$/;

		var first_name = document.getElementById("first_name").value;
		var middle_name = document.getElementById("middle_name").value;
		var last_name = document.getElementById("last_name").value;
		var email = document.getElementById("email").value;
		var gender = null;
		var male = document.getElementById("gender_male");
		var female = document.getElementById("gender_female");

		if (male.checked) {
			gender = male.value;
			// alert(male.checked);
		}else if (female.checked) {
			gender = female.value;
			// alert(female.checked);
		}
		var cnic = document.getElementById("cnic").value;
		var phone_number = document.getElementById("phone_number").value;
		var country = document.getElementById("country").value;
		var policies = document.getElementsByClassName("policies");

         var policy_counter = 0;
		for(var i=0;i<policies.length;i++){
		 if (policies[i].checked) {
                policy_counter++;
		     // console.log(policies[i]);
		 }
		}

		var flag = true;

		if (first_name == "") {
            flag = false;
            document.getElementById("first_name_msg").innerHTML = "Please Enter First Name !...";
		}else{
			document.getElementById("first_name_msg").innerHTML = "";

             if (alpha_pattern.test(first_name) == false) {
             	flag = false;
            document.getElementById("first_name_msg").innerHTML = " First Name must be like eg: Sherry";
             }  
		}

		if (middle_name != "") {
            
            if (alpha_pattern.test(middle_name) == false) {
             	flag = false;
            document.getElementById("middle_name_msg").innerHTML = " Middle Name must be like eg: Santos";
            }else{
			document.getElementById("middle_name_msg").innerHTML = "";
		}
             
		}

		if (last_name == "") {
            flag = false;
            document.getElementById("last_name_msg").innerHTML = "Please Enter Last Name !...";
		}else{
			document.getElementById("last_name_msg").innerHTML = "";

             if (alpha_pattern.test(last_name) == false) {
             	flag = false;
            document.getElementById("last_name_msg").innerHTML = " Last Name must be like eg: Wilson";
             }  
		}

		if (email == "") {
            flag = false;
            document.getElementById("email_msg").innerHTML = "Please Enter Email !...";
		}else{
			document.getElementById("email_msg").innerHTML = "";

             if (email_pattern.test(email) == false) {
             	flag = false;
            document.getElementById("email_msg").innerHTML = " Email must be like eg: shery12@gmail.com";
             }  
		}

		if (!gender) {

			flag = false;
            document.getElementById("gender_msg").innerHTML = "Please Select Gender !...";
		}else{
			document.getElementById("gender_msg").innerHTML = "";
		}

		if (cnic == "") {
            flag = false;
            document.getElementById("cnic_msg").innerHTML = "Please Enter CNIC Number !...";
		}else{
			document.getElementById("cnic_msg").innerHTML = "";

             if (cnic_pattern.test(cnic) == false) {
             	flag = false;
            document.getElementById("cnic_msg").innerHTML = " CNIC Number must be like eg: 41303-1234567-1";
             }  
		}

		if (phone_number == "") {
            flag = false;
            document.getElementById("phone_number_msg").innerHTML = "Please Enter Phone Number !...";
		}else{
			document.getElementById("phone_number_msg").innerHTML = "";

             if (phone_num_pattern.test(phone_number) == false) {
             	flag = false;
            document.getElementById("phone_number_msg").innerHTML = " Phone Number must be like eg: 92300 1234567";
             }  
		}

		if (country == "") {
				flag = false;
            document.getElementById("country_msg").innerHTML = "Please Select Country !...";
		}else{
			 document.getElementById("country_msg").innerHTML = "";
		}

		if (policy_counter != policies.length) {
			flag = false;
            document.getElementById("policies_msg").innerHTML = "Please Select All Policies !...";
		}else{
			 document.getElementById("policies_msg").innerHTML = "";
		}


          if (flag) {
          	return true;
          }else{
			return false;

          }

		}
	</script>
</head>
<body>

	<center>
		<h3>Registeration Form</h3><hr/>
		<fieldset>
			<legend>Register here</legend>
			<form action="server_side.php" method="POST">
				<table>
					<tr>
						<th>Marked (*) Fields are required !...</th>
						<?php if (isset($_REQUEST['message'])) {
							      echo "<ul>";
							       echo $_REQUEST['message'];
							      echo "</ul>";
						} ?>
					</tr>
					<tr>
						<td> First Name : <span>*</span></td>
						<td>
							<input type="text" name="first_name" id="first_name">
							<span id="first_name_msg"></span>
						</td>
					</tr>
					<tr>
						<td> Middle Name : </td>
						<td>
							<input type="text" name="middle_name" id="middle_name">
							<span id="middle_name_msg"></span>
						</td>
					</tr>
					<tr>
						<td> Last Name : <span>*</span></td>
						<td>
							<input type="text" name="last_name" id="last_name">
							<span id="last_name_msg"></span>
						</td>
					</tr>
					<tr>
						<td> Email : <span>*</span></td>
						<td>
							<input type="text" name="email" id="email">
							<span id="email_msg"></span>
						</td>
					</tr>
					<tr>
						<td> Gender : <span>*</span></td>
						<td>
							Male :<input type="radio" name="gender" id="gender_male" value="Male">
							Female :<input type="radio" name="gender" id="gender_female" value="Female">
							<span id="gender_msg"></span>
						</td>
					</tr>
					<tr>
						<td> CNIC : <span>*</span></td>
						<td>
							<input type="text" name="cnic" id="cnic">
							<span id="cnic_msg"></span>
						</td>
					</tr>
					<tr>
						<td> Phone Number : <span>*</span></td>
						<td>
							<input type="text" name="phone_number" id="phone_number">
							<span id="phone_number_msg"></span>
						</td>
					</tr>
					<tr>
						<td> Country : <span>*</span></td>
						<td>
							<select name="country" id="country">
								<option value="">--Select Country--</option>
								<option>Pakistan</option>
								<option>Iran</option>
								<option>China</option>
							</select>
							<span id="country_msg"></span>
						</td>
					</tr>

					<tr>
						<td> Policies : <span>*</span></td>
						<td>
						  Attendance : <input type="checkbox" name="policies[]" class="policies" value="Attendance">
						  Assignments : <input type="checkbox" name="policies[]" class="policies" value="Assignments">
						   Test :<input type="checkbox" name="policies[]" class="policies" value="Test">
						   Discipline :<input type="checkbox" name="policies[]" class="policies" value="Discipline">
						   <span id="policies_msg"></span>
						</td>
					</tr>
					<tr>
						<td>
							<input type="submit" name="register" value="Register" onclick="return register_form()">
						</td>
					
					</tr>
				</table>
				
			</form>
		</fieldset>
	</center>

</body>
</html>