<style type="text/css">
	.nav{
		background: red;
		border-radius:50px;
		border:1px solid red;
		height: 70px;
	}
	a{
		text-decoration: none;
	}
	.show{
		margin: 5px;
		/*border-radius:50px;*/
		border:1px solid red;
		height: 500px;
		width: 70%;
	}
	.online{
	     margin: 5px;
		/*background: red;*/
		/*border-radius:50px;*/
		border:1px solid red;
		height: 500px;
		width: 29%;
		float: right;
		margin-top: -38%;	
	}
</style>
  <h1 align="center">Ajax Chat System</h1>
<?php 
SESSION_start();

require_once('require/db_connection.php');
// require('session_maintaintance.php');

?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo $_SESSION['user']['first_name']." ".$_SESSION['user']['last_name']; ?></title>
	<script type="text/javascript">

		setInterval(function(){ 
			show(); 
		}, 1000);
		
		function send()
		{
          var message= document.getElementById('message_send').value;

          
          var ajax;
		if(window.XMLHttpRequest)
		{
			ajax=new XMLHttpRequest();

		}
		else
		{
           ajax=new ActiveXObject('Microsoft.XMLHTTP');

		}

		ajax.onreadystatechange=function()
		{
			if(ajax.readyState== 4 && ajax.status== 200)
			{
				var data=ajax.responseText;
				//alert(data);
				document.getElementById('message_send').value = "";
				
				// show_posts();
			}
		}
		ajax.open('POST','show_message_process.php');
		ajax.setRequestHeader('Content-type','application/x-www-form-urlencoded');
		ajax.send('action=sendmessage&message='+message);

	}
	function show()
	{
		 var message= document.getElementById('message_send').value;

          
          var ajax;
		if(window.XMLHttpRequest)
		{
			ajax=new XMLHttpRequest();

		}
		else
		{
           ajax=new ActiveXObject('Microsoft.XMLHTTP');

		}

		ajax.onreadystatechange=function()
		{
			if(ajax.readyState== 4 && ajax.status== 200)
			{
				var data=ajax.responseText;
				document.getElementById('message_show').innerHTML =data;
				
			}
		}
		ajax.open('POST','show_message_process.php');
		ajax.setRequestHeader('Content-type','application/x-www-form-urlencoded');
		ajax.send('action=showmessage');
	}
	</script>
		
</head>
<body bgcolor="skyblue">
	<div>
	<div class="nav">
	<p style="color: white;font-weight: bold;font-size: 20px;padding-left: 20px;font-style: italic;">
		<?php echo $_SESSION['user']['first_name']." ".$_SESSION['user']['last_name'];?>
			
	<a href="logout.php" style="float: right;border-radius: 20px;background: green;padding: 10px;color: white;margin-right: 20px; ">Logout</a>
	</p>
	</div>
		<div class="show" id="message_show" style="overflow-y: scroll;">
			
		</div>
		<div class="online" style="overflow-y: scroll;" >
			<p align="center" style="background-color: black;color: white;border-radius: 20px;padding: 10px;font-size: bold">Show Online Users</p>
		</div>
		<div class="message">
             <!-- <td>Messege Here:</td> -->
			<textarea cols="50" rows="3" style="border-radius: 20px;" name="message" id="message_send"></textarea>
			<button onclick="send()" style="style=float: right;border-radius: 20px;background: green;padding: 10px;color: white;margin-right: 20px;: ">Message</button>
			
		</div>
		<form>
			    <input type="hidden" id="field" value="insert">
		</form>
    </div>
</body>
</html>