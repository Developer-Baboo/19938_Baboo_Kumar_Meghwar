<!DOCTYPE html>
<html>
<head>
	<title>Pagination</title>
	<style type="text/css">
		table tr th{
			background-color: blue;
			color: white;

		}
		a{
			text-decoration: none;
		}
	</style>
</head>
<body>
	<?php 
		require_once 'require/connection.php';

		$totalCountPosts = "SELECT COUNT(*) AS 'Total_Posts' FROM `posts` ";
		$getResultCountPosts = mysqli_query($connection,$totalCountPosts);
		$Total_Posts = mysqli_fetch_assoc($getResultCountPosts);

		//echo $Total_Posts['Total_Posts'];

		$per_page = 4;

		$total_links = ceil($Total_Posts['Total_Posts']/$per_page);


		
		if(isset($_GET['page']))
		{	
			$start = ($_GET['page']*$per_page);
		}else
		{
			$start = 0;
			$_GET['page'] = 0;
		}
	?>
	<center>
		<h1>Pagination</h1>
		<hr />
		<p>
			<?php 
				if($_GET['page'] > 0)
				{
					?>
						<a href="pagination.php?page=<?php echo $_GET['page'] - 1; ?>">
							Previous
						</a>
					<?php 

				}
			
			for($i=1; $i<=$total_links; $i++)
			{
				if($_GET['page'] == $i-1)
				{
					?>
					<a href="pagination.php?page=<?php echo $i-1;?>" style="font-size: 30px; color: red;">
						<?php echo $i; ?>
							
					</a>
					<?php

				}else{
					?>
					<a href="pagination.php?page=<?php echo $i-1;?>"><?php echo $i; ?></a>
					<?php
				}
				
			}
			//echo $i;
			if(( 1 + $_GET['page']) != $i-1)
			{
				?>

				<a href="pagination.php?page=<?php echo $_GET['page'] + 1; ?>">
					Next
				</a>
				<?php
			}
			

			



		?>
		</p>
		<hr />
	</center>

	<?php 

		$query = "SELECT * FROM `posts` 
		ORDER BY `posts`.`post_id` DESC 
		LIMIT $start,$per_page";
		
		$result = mysqli_query($connection,$query);

	?>
	<table border="1" width="100%">
		<tr>
			<th>S.NO</th>	
			<th>Post Title</th>
			<th>Post Description</th>
		</tr>
		<?php 

			if($result->num_rows > 0)
			{
				$num = 1;
				while($row = mysqli_fetch_assoc($result))
				{
				?>
					<tr>
						<td><?php echo $num++; ?></td>
						<td><?php echo $row['post_title'] ?></td>
						<td><?php echo $row['post_description'] ?></td></td>
					</tr>
				<?php
				}	
			}
			else
			{
				?>
				<tr align="center">
					<td colspan="3">
						NO POSTS
					</td>
				</tr>
				<?php 
			}

		?>
		
	</table>
</body>
</html>