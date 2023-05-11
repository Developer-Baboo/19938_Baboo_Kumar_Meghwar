<!-- First, you need to set up your database and create two tables: pending_users and approved_users. The pending_users table should contain columns such as id, name, and status, while the approved_users table should have similar columns.

Next, create a PHP script that handles the button click and updates the user's status and moves them to the appropriate table. Here's an example -->







<?php
// Assuming you have a database connection established
$host = 'your_host';
$db = 'your_database';
$user = 'your_username';
$password = 'your_password';

// Connect to the database
$connection = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $password);

// Check if the button is clicked and a user ID is provided
if (isset($_POST['reject']) && isset($_POST['user_id'])) {
    $userId = $_POST['user_id'];

    // Fetch the user details from the pending_users table
    $query = "SELECT * FROM pending_users WHERE id = :user_id";
    $statement = $connection->prepare($query);
    $statement->bindParam(':user_id', $userId);
    $statement->execute();
    $user = $statement->fetch(PDO::FETCH_ASSOC);

    if ($user) {
        // Update the user's status to "rejected"
        $query = "UPDATE pending_users SET status = 'rejected' WHERE id = :user_id";
        $statement = $connection->prepare($query);
        $statement->bindParam(':user_id', $userId);
        $statement->execute();

        // Move the user to the approved_users table
        $query = "INSERT INTO approved_users (id, name, status) VALUES (:user_id, :name, 'rejected')";
        $statement = $connection->prepare($query);
        $statement->bindParam(':user_id', $user['id']);
        $statement->bindParam(':name', $user['name']);
        $statement->execute();
    }
}
?>
<!-- In your HTML, you can create a table that displays the pending users and includes a "Reject" button for each user. When the "Reject" button is clicked, it triggers a form submission with the user ID. Here's an example: -->

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        // Fetch and display pending users from the database
        $query = "SELECT * FROM pending_users";
        $statement = $connection->query($query);
        $users = $statement->fetchAll(PDO::FETCH_ASSOC);

        foreach ($users as $user) {
            echo '<tr>';
            echo '<td>' . $user['id'] . '</td>';
            echo '<td>' . $user['name'] . '</td>';
            echo '<td>' . $user['status'] . '</td>';
            echo '<td>';
            echo '<form method="post" action="">';
            echo '<input type="hidden" name="user_id" value="' . $user['id'] . '">';
            echo '<button type="submit" name="reject">Reject</button>';
            echo '</form>';
            echo '</td>';
            echo '</tr>';
        }
        ?>
    </tbody>
</table>