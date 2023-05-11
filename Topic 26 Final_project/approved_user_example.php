<?php
if (isset($_GET['approve'])) {
    $userId = $_GET['approve'];
    $fetchQuery = "SELECT * FROM pending_users WHERE id = $userId";
    $result = mysqli_query($conn, $fetchQuery);

    if (mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);

        $insertQuery = "INSERT INTO approved_users (name, email) VALUES ('" . $user['name'] . "', '" . $user['email'] . "')";
        $insertResult = mysqli_query($conn, $insertQuery);

        if ($insertResult) {
            $deleteQuery = "DELETE FROM pending_users WHERE id = $userId";
            $deleteResult = mysqli_query($conn, $deleteQuery);

            if ($deleteResult) {
                echo "User approved and moved to approved users table.";
            } else {
                echo "Failed to delete user from pending users table.";
            }
        } else {
            echo "Failed to move user to approved users table.";
        }
    } else {
        echo "User not found in pending users table.";
    }
}

// Close the database connection
mysqli_close($conn);
?>











<!-- 
Certainly! Here's an updated version of the previous code that includes sending an email notification to the approved user with their login credentials. -->


<?php
// Connect to your database
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$database = "your_database";

$conn = mysqli_connect($servername, $username, $password, $database);

// Check the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Process the approve button click
if (isset($_GET['approve'])) {
    $userId = $_GET['approve'];

    // Fetch user details from pending_users table
    $fetchQuery = "SELECT * FROM pending_users WHERE id = $userId";
    $result = mysqli_query($conn, $fetchQuery);

    if (mysqli_num_rows($result) > 0) {
        // User found in pending_users table
        $user = mysqli_fetch_assoc($result);

        // Move the user to approved_users table
        $insertQuery = "INSERT INTO approved_users (name, email, password) VALUES ('" . $user['name'] . "', '" . $user['email'] . "', '" . $user['password'] . "')";
        $insertResult = mysqli_query($conn, $insertQuery);

        if ($insertResult) {
            // User successfully moved to approved_users table, now delete from pending_users table
            $deleteQuery = "DELETE FROM pending_users WHERE id = $userId";
            $deleteResult = mysqli_query($conn, $deleteQuery);

            if ($deleteResult) {
                // Send email notification to the approved user
                $to = $user['email'];
                $subject = "Account Approved";
                $message = "Dear " . $user['name'] . ",\n\nYour account has been approved by the admin. You can now login using the following credentials:\n\nEmail: " . $user['email'] . "\nPassword: " . $user['password'] . "\n\nThank you!";
                $headers = "From: your_email@example.com";

                if (mail($to, $subject, $message, $headers)) {
                    echo "User approved and moved to approved users table. An email notification has been sent.";
                } else {
                    echo "User approved and moved to approved users table, but failed to send email notification.";
                }
            } else {
                echo "Failed to delete user from pending users table.";
            }
        } else {
            echo "Failed to move user to approved users table.";
        }
    } else {
        echo "User not found in pending users table.";
    }
}

// Close the database connection
mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Pending Users</title>
</head>
<body>
    <h1>Pending Users</h1>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Display the pending users from the database
            $selectQuery = "SELECT * FROM pending_users";
            $selectResult = mysqli_query($conn, $selectQuery);

            if (mysqli_num_rows($selectResult) > 0) {
                while ($row = mysqli_fetch_assoc($selectResult)) {
                    echo "<tr>";
                    echo "<td>" . $row['name'] . "</td>";
                    echo "<td>" . $row['email'] . "</td>";
                    echo "<td><a href='?approve=" . $row['id'] . "'>Approve
?>