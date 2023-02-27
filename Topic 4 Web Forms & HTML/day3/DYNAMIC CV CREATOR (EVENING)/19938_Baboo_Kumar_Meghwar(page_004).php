<!DOCTYPE html>
<html>

<head>
    <title>Dynamic CV Display</title>
</head>

<body>
    <table border="1">
        <!-- <tr>
            <td>
                <label for="name">Name</label>

            </td>
        </tr>
        <tr>
            <td>
                <label for="father_name">Father aname</label>

            </td>
        </tr>
        <tr>
            <td>
                <label for="gender"> Gender </label>

            </td>
        </tr>
 -->

        <tr>
            <td>
                <label for="gender"> Gender </label>

            </td>
        </tr>

        <tr>
            <td>
                <label for="gender">Email</label>
                <td><?php echo $_POST['hidden4'];?></td>
            </td>
        </tr>
        <tr>
            <td>

            </td>
        </tr>
        <tr>
            <th>Name</th>
            <th>Father Name</th>
            <th>Gender</th>
            <th>Country</th>
            <th>Email</th>
            <th>Contact Number</th>
            <th>Address</th>
            <th>School Name</th>
            <th>College Name</th>
            <th>University Name</th>
            <th>School Date</th>
            <th>College Date</th>
            <th>University Date</th>
            <th>Summary</th>
        </tr>

        <tr>
            <td><?php echo $_POST['hidden1']; ?></td>
            <td><?php echo $_POST['hidden2']; ?></td>
            <td><?php echo $_POST['hidden3']; ?></td>

            <td><?php echo $_POST['hidden4']; ?></td>
            <td><?php echo $_POST['hidden5']; ?></td>
            <td><?php echo $_POST['hidden6']; ?></td>
            <td><?php echo $_POST['hidden7']; ?></td>

            <td><?php echo $_POST['school_name']; ?></td>
            <td><?php echo $_POST['college_name']; ?></td>
            <td><?php echo $_POST['university_name']; ?></td>

            <td><?php echo $_POST['school_dates']; ?>
            <td><?php echo $_POST['college_dates']; ?>
            <td><?php echo $_POST['university_dates']; ?>
            <td><?php echo $_POST['summary']; ?>


        </tr>
    </table>
</body>

</html>