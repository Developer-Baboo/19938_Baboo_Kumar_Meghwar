<?php
require("require/connection.php");
?>
<html>
    <head>
        
        <title>
        Admin Panel
        </title>
    </head>
    <body>
        <center>
            <h1>Registered Users</h1>
            <table border="3" style="width: 50%;" >
                <tr>
                    <th>Name</th>
                    <th>Eamil</th>
                    <th>Action</th>
                </tr>
                <?php
                    $query = "SELECT * FROM user_tables ORDER BY `user_tables`.`user_id` DESC ";
                    $result = mysqli_query($connection, $query);
                    if ($result->num_rows) {
                        while ($row = mysqli_fetch_assoc($result)) {
                          ?>
                          <tr>
                            <td><?php echo $row['user_name']?></td>
                            <td><?php echo $row['father_name']; ?></td>
                            <td><a href="show_user.php?user_id=<?php echo $row['user_id'];?>">View Details</a></td>
                          </tr>
                          <?php
                          }
                    }
                    else{
                        echo "<h3 style='color:red'>No Record Available </h3>";
                    }
                    ?>
            </table>
        </center>
    </body>
</html>