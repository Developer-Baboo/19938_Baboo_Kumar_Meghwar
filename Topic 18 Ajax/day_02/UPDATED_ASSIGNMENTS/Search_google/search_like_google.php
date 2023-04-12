<!DOCTYPE html>
<html>

<head>
	<title>SEARCH LIKE GOOGLE</title>
	<style>
		h1 {
			font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
			background-color: #007bff;
			color: #fff;
			padding: 10px;
			border-radius: 10px;
			text-align: center;
		}

		li {
			list-style-type: none;
		}

		table {
			width: 100%;
			border-collapse: collapse;
		}

		td {
			padding: 10px;
			font-size: 16px;
		}

		fieldset {
			padding: 10px;
			transition: all 0.3s ease;
			border: 4px solid #007bff;
			border-radius: 10px;
		}

		fieldset:hover {
			box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);
		}

		legend {
			font-size: 20px;
			transition: all 0.3s ease;
		}

		legend:hover {
			color: red;
		}

		input[type="text"] {
			width: 80%;
			padding: 10px;
			margin-bottom: 20px;
			border: 2px solid #007bff;
			border-radius: 10px;
			font-size: 16px;
		}
	</style>
	<script type="text/javascript">
		function search_google() {
			var post = document.getElementById('search').value;


			var ajax;
			if (window.XMLHttpRequest) {
				ajax = new XMLHttpRequest();

			} else {
				ajax = new ActiveXObject('Microsoft.XMLHTTP');

			}
			ajax.onreadystatechange = function() {
				if (ajax.readyState == 4 && ajax.status == 200) {


					document.getElementById('search_area').innerHTML = ajax.responseText;

				}
			}
			ajax.open('POST', 'search_post.php');
			ajax.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
			ajax.send('action=post&search=' + post);

		}
	</script>
</head>

<body>
	<h1>SEARCH LIKE GOOGLE</h1>
	<center>
		<fieldset style="width: 50%">
			<legend>Search..</legend>
			<table>
				<tr>
					<td>Search:</td>
					<td><input type="text" id="search" placeholder="SEARCH LIKE GOOGLE OR TYPE URL" onkeypress="search_google()"></td>
				</tr>
				<tr>
				</tr>
			</table>
		</fieldset>
		<div id="search_area">

		</div>
	</center>
</body>

</html>