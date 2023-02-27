<?php
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $contact_number = $_POST['contact_number'];
    $address = $_POST['address'];
}

?>
<!DOCTYPE html>
<html>

<head>
    <title>Professional Information</title>
</head>

<body>
    <form method="POST" action="page4.php">

        <label for="school_name">School Name:</label>
        <input type="text" id="school_name" name="school_name"><br><br>

        <label for="college_name">College Name:</label>
        <input type="text" id="college_name" name="college_name"><br><br>

        <label for="university_name">University Name:</label>
        <input type="text" id="university_name" name="university_name"><br><br>

        <label for="school_dates">School Dates:</label>
        <input type="date" id="school_dates" name="school_dates"><br><br>

        <label for="college_dates">College Dates:</label>
        <input type="date" id="college_dates" name="college_dates"><br><br>

        <label for="university_dates">University Dates:</label>
        <input type="date" id="university_dates" name="university_dates"><br><br>

        <label for="summary">Summary:</label><br>

        <textarea id="summary" name="summary"></textarea><br><br>

        <input type="hidden" name="hidden1" value="<?php echo $f_name; ?>">
        <input type="hidden" name="hidden2" value="<?php echo $father_name; ?>">
        <input type="hidden" name="hidden3" value="<?php echo $gender; ?>">
        <input type="hidden" name="hidden4" value="<?php echo $country; ?>">


        <input type="hidden" name="hidden5" value="<?php echo $email; ?>"></td>
        <input type="hidden" name="hidden6" value="<?php echo $contact_number; ?>"></td>
        <input type="hidden" name="hidden7" value="<?php echo $address; ?>"></td>



        <input type="submit" name="submit" value="submit">


    </form>
</body>

</html>