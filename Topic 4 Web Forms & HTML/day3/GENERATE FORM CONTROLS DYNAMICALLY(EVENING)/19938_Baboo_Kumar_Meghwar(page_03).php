<!DOCTYPE html>
<html>
<head>
    <title>Display Data in Page 3</title>
</head>
<body>
    <?php
    ?>
    <table border="1">
        <tr>
            <th>Name</th>
            <th>Gender</th>
            <th>Password</th>
        </tr>
        <tr>
            <td><?php echo $_POST['hidden1']; ?></td>
            <td><?php echo $_POST['hidden2']; ?></td>
            <td><?php echo $_POST['password']; ?></td>
        </tr>
    </table>
</body>

</html>