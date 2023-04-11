<?php
mysqli_report(MYSQLI_REPORT_OFF);
if (mysqli_connect_error()) {
    die("<h1>Database Connection Failed!...</h1>");
}
$connection = mysqli_connect("localhost", 'root', '', 'ajax_cnic');
if (isset($_REQUEST['action']) && $_REQUEST['action'] == "result") {
    $sql = "SELECT * FROM user_data WHERE cnic_number = '$cnic'";
    $result = $connection->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $user_id = $row['user_id'];
        $user_name = $row['user_name'];
        $cnic_number = $row['cnic_number'];
        $phone_number = $row['phone_number'];
        $email_address = $row['email_address'];
        $image_path = $row['image_path'];

        $output = '<div>';
        $output .= '<img src="' . $image_path . '">';
        $output .= '<p>User ID: ' . $user_id . '</p>';
        $output .= '<p>User Name: ' . $user_name . '</p>';
        $output .= '<p>CNIC Number: ' . $cnic_number . '</p>';
        $output .= '<p>Phone Number: ' . $phone_number . '</p>';
        $output .= '<p>Email Address: ' . $email_address . '</p>';
        $output .= '</div>';
        echo $output;
    } else {
        echo 'Record Not Found!...';
    }
}
$connection->close();
?>