<?php
session_start();
if (!isset($_SESSION['User']['role_type']) =='User') {
    header("location:../index_01.php");
}
?>
<?php
echo "Welcome User";
?>