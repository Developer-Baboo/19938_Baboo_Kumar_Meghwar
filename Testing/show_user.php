<?php
require("require/connection.php");
if (isset($_REQUEST['user_id'])) {
   $user_id = $_REQUEST['user_id'];
    $query = "SELECT * FROM user_tables WHERE user_id = $user_id";
    $result = mysqli_query($connection, $query);
        $row = mysqli_fetch_assoc($result)
          ?>
          <center>
            <h4>
              User Details
            </h4>
          <table border="3" style="width: 50%;">
          <tr>
            <td>Name</td>
            <td><?php echo $row['user_name']?></td>
          </tr>
          <tr>
            <td>Father Name</td>
            <td><?php echo $row['father_name']; ?></td>
          </tr>
          <tr>
            <td>Caste</td>
            <td><?php echo $row['caste']; ?>
          </tr>
          <tr>
            <td>Class </td>
            <td><?php echo $row['class']; ?></td>
          </tr>
          <tr>
            <td>Gender</td>
            <td><?php echo $row['gender']; ?></td>
          </tr>
          <tr>
            <td>Date Of Birth</td>
            <td><?php echo $row['date_of_birth']; ?></td>
          </tr>
          <tr>
            <td>Course Name</td>
            <td><?php echo $row['course_name']; ?></td>
          </tr>
          <tr>
            <td>Course Duration</td>
            <td><?php echo $row['course_duration']; ?></td>
          </tr>
          <tr>
            <td>Batch</td>
            <td><?php echo $row['batch']; ?></td>
          </tr>
          <tr>
            <td>Date of Admission</td>
            <td><?php echo $row['date_of_admission']; ?></td>
          </tr>
          <tr>
            <td>Fees</td>
            <td><?php echo $row['fees']; ?></td>
          </tr>
          <tr>
            <td>Desired Time</td>
            <td><?php echo $row['desired_time']; ?></td>
          </tr>
          <tr>
            <td>Whatsap Number</td>
            <td><?php echo $row['whatsap_no']; ?></td>
          </tr>
          <tr>
            <td>Email</td>
            <td><?php echo $row['email']; ?>
          </tr>
          </table>
          </center>
          <?php
          }
?>