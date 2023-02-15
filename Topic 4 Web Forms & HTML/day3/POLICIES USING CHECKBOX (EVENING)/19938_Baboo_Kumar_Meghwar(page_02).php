<!DOCTYPE html>
<html>

<head>
    <title>Assignment</title>
</head>

<body>
    <?php
    if (isset($_POST['submit'])) {
        $stipend = $_POST['Stipend'];
        $Disciplane = $_POST['Disciplane'];
        $Attendance = $_POST['Attendance'];
        $Assignment = $_POST['Assignment'];
        $Agree = $_POST['Agree'];
    }
    
    ?>

    <form>
        <?php
        if (isset($number)) {
            for ($a = 1; $a <= $stipend; $a++) {
        ?>
                <input type="text" name="name<?php echo $a; ?>" />
        <?php
            }
        }
        ?>

        <input type="submit" value="Insert">

    </form>
</body>

</html>