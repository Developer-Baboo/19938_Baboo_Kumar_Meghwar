<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	// echo _GET['post_id'];
        include("require/connection.php");
        if (isset($_GET['post_id'])) {
        	// echo "hello world";
        	// die();
  			$post_id = $_GET['post_id'];
        	$query = "SELECT * FROM post where post_id = $post_id";
	        $result = mysqli_query($connection, $query);
	        $row = mysqli_fetch_assoc($result);
	        ?>
	        
	        <center>
	        	<h1>Post Details<h1>
	        	<table width="50%" border="2px" >
	        	<tr>
	        		<!-- Follow : <input type="submit" name="follow"> -->
	        		<td>Blog</td>
	        		<td>POST TITLE</td>
	        		<td>POST SUMMARY</td>
	        		<td>POST Description</td>
	        		<td>POST IMAGE</td>
	        		<td>POST COMMENT</td>
	        	</tr>
	        	<tr>
	        		<!-- Follow :  -->
	        		<td><?php echo $row['blog_id'] ?> <a href="admin/follow_blog_process.php?blog_id=<?php echo $row['blog_id'] ?>">Follow</a>  </td>
	        		<td><?php echo $row['post_title'] ?></td>
	        		<td><?php echo $row['post_summary'] ?></td>
	        		<td><?php echo $row['post_description'] ?></td>
	        		<td><img  height="10px" width="10px" src="images/<?php echo $row['featured_image']?>"></td>
	        		<td>
	        			<textarea></textarea>
	        			<a href="admin/post_comment_process.php">Send</a>
	        		</td>
	        	</tr>
	        </table>
	        </center>


	        <?php
        }
      ?>
</body>
</html>