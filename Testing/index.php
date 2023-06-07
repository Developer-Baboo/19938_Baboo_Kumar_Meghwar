<?php
// echo "workding";
?>
<!doctype html>
<html lang="en">

<head>
    <title>Admin Side</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <style>
        *{
            background-color: #C1E1C1;
        }
        input[type="text"]{
                /* border: none;
                outline:none; */
                border-radius:20px;
                }
                input[type="number"]{
                /* border: none;
                outline:none; */
                border-radius:20px;
                }
                input[type="email"]{
                /* border: none;
                outline:none; */
                border-radius:20px;
                }
                input[type="date"]{
                /* border: none;
                outline:none; */
                border-radius:20px;
                }
                input[type="time"]{
                /* border: none;
                bord
                outline:none; */
                border-radius:20px;
                }
                
      input[type="submit"]{
                border: none;
                outline:none;
                height:40px;
                width: 100px;
                background:#4F7942;
                color: #fff;
                font-size:18px;
                border-radius:20px;
                }
      input[type="submit"]:hover{
                cursor:pointer;
                background:#228B22;
                /* color:#000; */
                }
                span{
                    color:red;
                }
    </style>
</head>

<body>
    <center>
        <form action="process_page.php" method="POST" >
            <fieldset>
                <legend>
                    <img src="images/p.png" style="border-radius: 10px" height="30px"  alt="">
                    iHunar Digital Literacy Training Program Form
                </legend>
                
                <table>
                    <tr>
                        <td>
                            <label for="">Name : </label> <span>*</span>
                        </td>
                        <td><input placeholder="Enter Your Name " type="text" name="name" id="" required ></td>
                    </tr>
                    <tr>
                        <td>
                            <label for="">Father's Name : </label> <span>*</span>
                        </td>
                        <td><input type="text" placeholder="Enter Your Father's Name " name="father_name" id="" required></td>
                    </tr>
                    <tr>
                        <td>
                            <label for="">Caste : </label> <span>*</span>
                        </td>
                        <td><input placeholder="Enter Your Caste" type="text" name="caste" id="" required></td>
                    </tr>
                    <tr>
                        <td>
                            <label for="">Class : </label> <span>*</span>
                        </td>
                        <td><input placeholder="Enter Your Class" type="text" name="class" id="" required ></td>
                    </tr>
                    <tr>
                        <td>
                            <label for="">Gender : </label> <span>*</span>
                        </td>
                        <td><input type="radio" value="Male" name="gender" checked >Male</td>
                        <td><input type="radio" value="Female" name="gender">Female</td>
                    </tr>
                    <tr>
                        <td>
                            <label for="">Date Of Birth : </label>  <span>*</span>
                        </td>
                        <td><input  type="date" name="date_of_birth" id="" required></td>
                    </tr>
                    <tr>
                        <td>
                            <label for="">Course Name </label>  <span>*</span>
                        </td>
                        <td><input placeholder="Enter Course Name"  type="text" name="course_name" id="" required></td>
                    </tr>
                    <tr>
                        <td>
                            <label for="">Course Duration</label>  <span>*</span>
                        </td>
                        <td><input placeholder="Enter Course Duration"  type="number" name="course_duration" id="" required ></td>
                    </tr>
                    <tr>
                        <td>
                            <label for="">Batch : </label>  <span>*</span>
                        </td>
                        <td><input placeholder="Enter Your Batch"  type="text" name="batch" id="" required ></td>
                    </tr>
                    <tr>
                        <td>
                            <label for="">Date of Admission : </label>  <span>*</span>
                        </td>
                        <td><input placeholder="Enter Date of Admission"  type="date" name="date_of_admission" id="" required></td>
                    </tr>
                    <tr>
                        <td>
                            <label for="">Fees : </label>  <span>*</span>
                        </td>
                        <td><input placeholder="Enter Your Fees"  type="number" name="fees" id="" required></td>
                    </tr>
                    <tr>
                        <td>
                            <label for="">Desired Time : </label>  <span>*</span>
                        </td>
                        <td><input placeholder="Enter Desired Time"  type="time" name="desired_time" id="" required></td>
                    </tr>
                    
                    <tr>
                        <td>
                            <label for="">Whatsap No : </label>  <span>*</span>
                        </td>
                        <td><input placeholder="Enter WhatsApp Number"  type="number" name="whatsap_no" id="" required></td>
                    </tr>
                    <tr>
                        <td>
                            <label for="">Email (optional):</label>
                        </td>
                        <td><input placeholder="Enter Your Email"  type="email" name="email" id="" required></td>
                    </tr>
                    <tr>
                        <td>
                        </td>
                        <td><input type="submit" name="submit" value="submit"></td>
                    </tr>
                </table>
            </fieldset>
        </form>
    </center>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>