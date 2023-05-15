
<form method="POST" action="edit_profile_process.php" enctype="multipart/form-data">

    <table cellpadding="10px" cellspacing="0px" style="background: skyblue;width: 100%;border-bottom-right-radius: 10px;border-bottom-left-radius: 10px">

        <tr>
            <td>Firstname:</td>
            <td><input type="text" name="first_name" id="first_name" required placeholder="Enter Your Firstname" style="border-radius: 5px;width: 100%;  padding: 6px;" value="<?php echo $row['first_name'] ?>"></td>
        </tr>
        <tr>
            <td>Lastname:</td>
            <td><input type="text" name="last_name" id="last_name" required placeholder="Enter Your Lastname" style="border-radius: 5px;width: 100%; padding: 6px;" value="<?php echo $row['last_name'] ?>"></td>

        </tr>
        <tr>
            <td>Gender:</td>
            <td><input type="radio" name="gender" id="male" value="Male" checked class="from-control" value="<?php echo $row['gender'] ?>">Male

                <input type="radio" name="gender" id="female" value="Female" value="<?php echo $row['gender'] ?>"> Female
            </td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="email" name="email" id="email" required placeholder="Enter Your Email" style="border-radius: 5px;width: 100%; padding: 6px;" value="<?php echo $row['email'] ?>"></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type="text" name="password" id="password" required placeholder="Enter Your Password" style="border-radius: 5px;width: 100%;padding: 5px;" value="<?php echo $row['password'] ?>"></td>

        </tr>
        <tr>
            <td>Date-Of-Birth</td>
            <td><input type="date" name="dob" id="dob" style="border-radius: 5px;width: 100%;padding: 5px;" value="<?php echo $row['date_of_birth'] ?>"></td>

        </tr>
        <tr>
            <td>Image</td>
            <td><input type="file" name="upload" id="upload" accept="" value=""></td>

        </tr>
        <tr>
            <td>Hometown</td>
            <td><input type="textarea" name="address" value=" <?php echo trim($row['home_town']) ?>" id="address" cols="20" rows="3" style="border-radius: 5px; width: 100%; "></td>



        </tr>

        <tr>
            <input type="hidden" name="user_id" value="<?php echo $row['user_id'] ?>">

            <td colspan="5" align="center"><input type="submit" name="edit_profile" class="btn btn-info" value="Update Profile"></td>
        </tr>

    </table>
</form>