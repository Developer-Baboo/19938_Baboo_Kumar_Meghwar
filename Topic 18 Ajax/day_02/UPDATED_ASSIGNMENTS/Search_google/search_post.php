<?php
require('db_conn.php');
if(isset($_POST['action'])&& $_POST['action']=='post')
{
	$query="SELECT * FROM posts WHERE  title_description   LIKE '%".$_REQUEST['search']."%'";

	$result=mysqli_query($conn,$query);

	if ($result) 
	{
		?>

		<ul>
		<?php
		while ($row=mysqli_fetch_assoc($result)) 
		{
			?>
			<li> <?php  echo $row['title_description']; ?> </li>
			<?php
		}

		?>
		</ul>
		<?php
	}

}
?>