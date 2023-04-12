<?php
session_start();
require_once('require/db_connection.php');

	if (isset($_POST['action']) && $_POST['action']=='sendmessage') 
	{
	    extract($_POST);
    	date_default_timezone_set("Asia/Karachi");
        $currenttime    = date('Y-m-d h:i:s');
  		$query="INSERT INTO chat (message,user_id,added_on) 
  		Values('".$message."','".$_SESSION['user']['user_id']."','".$currenttime."')";
   
        $result=mysqli_query($connection,$query);
		
	}

    else if(isset($_POST['action']) && $_POST['action']=='showmessage')
    {


	extract($_POST);

   	
    $query="SELECT *  FROM chat,users WHERE users.user_id = chat.user_id ";
   
  
    $result=mysqli_query($connection,$query);

   if($result)
   {
  	while($row = mysqli_fetch_assoc($result))
  	{
    
 	?>
 	<p style="color: black;border-radius: 20px; margin-left: 20px "> <span style="background-color: green;color: white; border: 1px solid green; padding: 5px; border-radius: 20px"><?php echo $row['first_name']." ".$row['last_name']?></span> 
 	<span> : <?php echo  $row['message']; ?>  </span> <span style="color: blue"> <?php echo $row['added_on']; ?> </span></p>


 	<?php
 	}
    }        
  	
   }
?>