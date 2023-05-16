<?php

            $query = "SELECT * FROM users,roles,user_role,STATUS WHERE user_role.`user_id`=users.`user_id`
              AND users.`status_id`=status.`status_id`
              AND user_role.`role_id`=roles.`role_id`  AND users.user_id<>" . $_SESSION['admin']['user_id'];
    $result = mysqli_query($connection, $query);
$count = 1;

if ($result->num_rows) {
?>



    <table class="table table-striped table-hover" id="table" style="width: 100%">
        <thead>
            <tr>
                <!-- <th class="bg-info text-center">User id</th> -->
                <!-- <th>SR.no</th> -->
                <th> image</th>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Email</th>
                <th>Role</th>
                <th>Status</th>
                <th>Action</th>


            </tr>
        </thead>
        <?php

        while ($row = mysqli_fetch_assoc($result)) {
        ?>
            <tbody>
                <tr>
                    <!-- <td><?php //echo $count++
                                ?></td>  -->
                    <td><img src="../General/picture/<?php echo $row['image']; ?>" style="width: 60px; border-radius: 50px"></td>
                    <td><?php echo $row['first_name'] ?></td>
                    <td><?php echo $row['last_name'] ?></td>

                    <td><?php echo $row['email'] ?></td>

                    <td><?php echo $row['role_type'] ?></td>
                    <td>
                        <?php

                        if ($row['status_id'] == 2) {
                        ?>
                            <span class="badge badge-danger text-light  p-2"><?php echo $row['status'] ?></span>
                        <?php
                        } else if ($row['status_id'] == 1) {
                        ?>
                            <span class="badge badge-success text-light  p-2"><?php echo $row['status'] ?></span>
                        <?php
                        }


                        ?>

                    </td>

                    <td>
                        <?php


                        if ($row['status_id'] == 1) {
                        ?>
                            <a style="padding:5px;" class="btn btn-info" href="all_active_users.php?action=update&user_id=<?php echo $row['user_id'] ?>&status_id=2">InActive</a>
                        <?php
                        } else if ($row['status_id'] == 2) {
                        ?>
                            <a style="padding:5px;" class="btn btn-info" href="all_active_users.php?action=update&user_id=<?php echo $row['user_id'] ?>&status_id=1">Active</a>
                        <?php
                        }
                        ?>

                    </td>
                </tr>
            </tbody>
        <?php
        }
        ?>
    </table>
<?php
}
?>