<?php
require("require/connection.php");
if (isset($_POST['submit'])) {
    extract($_POST);
    $query = "INSERT INTO user_tables(user_name, father_name, caste, class, gender, date_of_birth, course_name, course_duration, batch, date_of_admission, fees, desired_time, whatsap_no, email) VALUES ('" . $name . "','" . $father_name . "','" . $caste . "','" . $class . "','" . $gender . "','" . $date_of_birth . "','" . $course_name . "','" . $course_duration . "','" . $batch . "','" . $date_of_admission . "','" . $fees . "','" . $desired_time . "','" . $whatsap_no . "','" . $email . "')";
    $result1 = mysqli_query($connection, $query);
    if ($result1) {
?>
        <script>
            alert("Record Inserted Successfully");
        </script>

<?php
        header("Location:index.php");
    }
}
?>