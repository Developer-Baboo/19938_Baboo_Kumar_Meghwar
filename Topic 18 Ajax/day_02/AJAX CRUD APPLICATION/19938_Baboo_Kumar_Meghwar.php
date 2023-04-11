<!DOCTYPE html>
<html>

<head>
    <script>

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
        #description,#summary {
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
        <h1>Ajax Crud Application</h1>
    </center>
    <center>
        <form action="">
            <fieldset>
                <legend>Add New Post</legend>
                <table>
                    <tr>
                        <th><label>Title : </label></th>
                        <td><input placeholder="Enter Your Post Title " type="text" name="title"></td>
                    </tr>
                    <tr>
                        <th><label>Summary : </label></th>
                        <td> <textarea placeholder="Enter Your Post Summary"  name="summary" id="summary" cols="10" rows="1"></textarea></td>
                    </tr>
                    <tr>
                        <th><label>Description : </label></th>
                        <td> <textarea placeholder="Enter Your Post Description" name="description" id="description" cols="10" rows="1"></textarea></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input id="green" type="submit" value="Add Post" name="add_post"></td>
                        <td><input id="red" type="submit" value="Cancel" name="cancel"></td>
                    </tr>
                </table>
            </fieldset>
        </form>
    </center>
</body>

</html>