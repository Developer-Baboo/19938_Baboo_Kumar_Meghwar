<?php
require_once("./connection.php");
if (isset($_POST['submit'])) {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $father_name = $_POST['father_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql_query = "INSERT INTO register_form (`First Name`, `Last Name`, `Father Name`, `Email`, `Password`) VALUES (?, ?, ?, ?, ?)";
    $statement = mysqli_prepare($connection, $sql_query);
    mysqli_stmt_bind_param($statement, "sssss", $first_name, $last_name, $father_name, $email, $password);
    $rs_execute = mysqli_stmt_execute($statement);
    if ($rs_execute) {
?>
        <script>
            alert("Record Inserted Successfully");
        </script>
<?php
        header("location: login_page.php");

    }
}
?>