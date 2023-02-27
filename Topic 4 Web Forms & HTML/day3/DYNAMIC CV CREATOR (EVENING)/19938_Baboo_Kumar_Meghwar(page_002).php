<?php
if (isset($_POST['submit'])) {
    $f_name = $_POST['f_name'];
    $father_name = $_POST['father_name'];
    $gender = $_POST['gender'];
    $country = $_POST['country'];
    $submit = $_POST['submit'];
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Contact Information</title>
</head>

<body>
    <form method="POST" action="page3.php">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email"><br />

        <label for="contact_number">Contact Number:</label>
        <input type="text" id="contact_number" name="contact_number"> <br>

        <label for="address">Address:</label>
        <textarea id="address" name="address"></textarea> <br>

        <input type="hidden" name="hidden1" value="<?php echo $f_name; ?>">
        <input type="hidden" name="hidden2" value="<?php echo $father_name; ?>">
        <input type="hidden" name="hidden3" value="<?php echo $gender; ?>">
        <input type="hidden" name="hidden4" value="<?php echo $country; ?>">
        <input type="hidden" name="hidden5" value="<?php echo $submit; ?>">


        <input type="submit" name="submit" value="submit">
    </form>
</body>

</html>