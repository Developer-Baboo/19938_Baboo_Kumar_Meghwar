<?php  
header("Content-Type:application/vnd-ms-excel");
header("Content-Disposition:attachment; filename=my_excel_file.xls");
header("Cache-Control: no-cache , no-store");
header("Pragma: no-cache");
header("Expires:0");
require_once("require/connection.php");
$query="SELECT * FROM users";
$result=mysqli_query($connection,$query);
if ($result->num_rows>0) { ?>
	<center>
 	<table border="1"><tr>
 		<th>User id</th>
 		<th>Full name</th>
 		<th>Gender</th>
 		<th>Email</th>
 		<th>Status</th>
 	</tr>

 	<?php
 	while($row=mysqli_fetch_assoc($result))
 	{
 	
 		?>
 		<tr>
 			<td><?php echo $row['user_id']; ?></td>
 			<td><?php echo $row['full_name']; ?></td>
 			<td><?php echo $row['gender']; ?></td>
 			<td><?php echo $row['user_email']; ?></td>
 			<td><?php echo $row['is_active']; ?></td>
 		</tr>
 		<?php
 	}
 	?>
 </table>
 </center>
 <?php }else{
 	echo "<p style='color:red; text-align:center;'>NO Record Found</p>";
 } 

?>