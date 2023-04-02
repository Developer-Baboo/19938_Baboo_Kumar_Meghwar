<?php
    include_once("../connection.php");
    if (isset($_REQUEST['user_id'])) {
   		$user_id=$_REQUEST['user_id'];
   		$qry="SELECT *FROM registraction_table inner join image_table on registraction_table.user_id = image_table.user_id where registraction_table.user_id = $user_id";
   		$result = mysqli_query($connection, $qry);
   		if(mysqli_num_rows($result)){
   			$data=mysqli_fetch_assoc($result);

   			?>
   			<table>
   				<thead>
   					
   				<tr>
   					<td>Profile</td>
   				</tr>
   				</thead>
   				<tbody>
   					<tr>
   						<td><img src="<?php echo "../".$data['image_name']?>"></td>
   					</tr>
   				</tbody>

   			</table>
   			<?php
   		}
   	  }
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

</body>
</html>