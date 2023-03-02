<!DOCTYPE html>
<html>
<head>
    <title>
        View Records
    </title>
</head>
<body>
    <center>
        <form action="" method="POST">
            <table border="1">
                <tr>
                    <th></th>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Father Name</th>
                    <th>Surname</th>
                    <th>Department</th>
                </tr>
                <tr>
                    <td><?php echo $_POST['hidden1']; ?></td>
                    <td><?php echo $_POST['hidden2']; ?></td>
                    <td><?php echo $_POST['hidden3']; ?></td>
                    <td><?php echo $_POST['hidden4']; ?></td>
                    <td><?php echo $_POST['hidden5']; ?></td>
                    <td><?php echo $_POST['hidden5']; ?></td>
                </tr>
                <tr>
                    <td><input type="submit" value="Add New Record" name="submit1"> </td>
                    <td><input type="submit" value="Delete Record" name="submit2"> </td>
                    <td><input type="submit" value="Edit Record" name="submit3"> </td>
                </tr>
                <br>
                <br>
                <tr>
                    <td> <label>Search: </label> </td>
                    <td><input type="search" name="search_item"></td>
                    <td><input type="submit" name="Search" value="Search"></td>
                </tr>
                <tr>
                    <td><p> Following Record is Found </p></td>
                </tr>
            </table>
        </form>
    </center>
</body>
</html>