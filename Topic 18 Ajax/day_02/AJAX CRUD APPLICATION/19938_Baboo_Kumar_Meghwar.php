<!DOCTYPE html>
<html>

<head>
    <title>AJAX CURD APPLICATION</title>
    <script>
        function addPost() {
            // alert("working");
            var title = document.getElementById('title').value;
            var summary = document.getElementById('summary').value;
            var description = document.getElementById('description').value;

            // alert(title + " " + summary + " " + description);

            var obj;
            if (window.ActiveXObject) {
                obj = new ActiveXObject("Microsoft.XMLHTTP");
            } else {
                obj = new XMLHttpRequest();
            }
            obj.onreadystatechange = function() {
                if (obj.readyState == 4 && obj.status == 200) {
                    document.getElementById('result').innerHTML = obj.responseText;
                }
            }
            obj.open("POST", 'ajax_crud_process.php');
            obj.setRequestHeader("content-type", "application/x-www-form-urlencoded");
            obj.send("action=result&title=" + title);
        }
    </script>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: lightblue;
        }

        h1 {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #007bff;
            color: #fff;
            padding: 10px;
            border-radius: 10px;
            text-align: center;
        }

        form {
            width: 50%;
            margin: 0 auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        td {
            padding: 10px;
            font-size: 16px;
        }

        input[type="text"],
        #description,
        #summary {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 2px solid #007bff;
            border-radius: 10px;
            font-size: 16px;
        }

        #green {
            background-color: #28a745;
            color: #fff;
            border: none;
            padding: 20px 40px;
            border-radius: 10px;
            cursor: pointer;
        }

        #green:hover {
            background-color: #218838;
        }


        #red {
            background-color: #dc3545;
            color: #fff;
            border: none;
            padding: 20px 40px;
            border-radius: 10px;
            cursor: pointer;
        }

        #red:hover {
            background-color: #c82333;
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
    </style>
</head>

<body>
    <center>
        <h1>AJAX CURD APPLICATION</h1>
    </center>
    <center>
        <form action="ajax_crud_process.php">
            <fieldset>
                <legend>Add New Post</legend>
                <table>
                    <tr>
                        <th><label>Title : </label></th>
                        <td><input placeholder="Enter Your Post Title " id="title" type="text" name="title"></td>
                    </tr>
                    <tr>
                        <th><label>Summary : </label></th>
                        <td> <textarea placeholder="Enter Your Post Summary" id="summary" name="summary" id="summary" cols="10" rows="1"></textarea></td>
                    </tr>
                    <tr>
                        <th><label>Description : </label></th>
                        <td> <textarea placeholder="Enter Your Post Description" id="description" name="description" id="description" cols="10" rows="1"></textarea></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input id="green" type="submit" value="Add Post" name="add_post" onclick="addPost()"></td>
                        <td><input id="red" type="submit" value="Cancel" name="cancel"></td>
                    </tr>
                </table>
            </fieldset>
        </form>
    </center>
    <div id="result"></div>
</body>

</html>

<?php
$connection = mysqli_connect('localhost', 'root', '', 'ajax_curd');
$query = "SELECT * FROM posts";
$res = mysqli_query($connection, $query);
if(mysqli_num_rows($res)){
    ?>
    <table border="1" style="width:100%;margin-top:30px;">
        <thead>
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Summary</th>
                        <th>Description</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <?php while($data=mysqli_fetch_assoc($res)){
                    ?>
                    <tbody>
                        <tr>
                            <td><?php echo $data['title']?></td>
                            <td><?php echo $data['summary']?></td>
                            <td><?php echo $data['description']?></td>
                            <td><a href="">Edit</a> | <a href="">Delete</a></td>
                        </tr>
                    </tbody>
                    <?php
                }?>
                
        </thead>
	</table>
    <?php
}


?>