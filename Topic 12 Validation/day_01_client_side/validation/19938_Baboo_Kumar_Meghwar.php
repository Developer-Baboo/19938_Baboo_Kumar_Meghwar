<!DOCTYPE html>
<html>

<head>
    <title>Client Side Validation</title>
    <style>
        * {
            background-color: lightsteelblue;
            font-weight: bold;
        }

        h1 {
            font-family: cursive;
            background-color: lightseagreen;
            border-radius: 10px;
            border: 2px groove yellowgreen;
            padding: 5px;
            margin: 3px;
        }

        form {
            padding: 20px;
            border: 4px groove grey;
            border-radius: 10px;
            font-family: Arial, sans-serif;
        }

        label {
            font-weight: bold;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 2px solid black;
            border-radius: 3px;
            /* box-sizing: border-box; */
            font-size: 16px;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            font-size: 16px;
            cursor: pointer;
        }

        select option {
            font-size: 16px;
            color: #333;
            background-color: #fff;
        }

        input[type="submit"]:hover {
            background-color: #3e8e41;
        }

        span {
            color: red;
        }
    </style>
</head>

<body>
    <center>
        <h1>Client Side Validation Using JS</h1>
        <hr>
    </center>
    <center>
        <form action=" return Validation() ">
            <fieldset>
                <legend>Registraction Form</legend>
                <table>
                    <tr>
                        <td> Enter First Name: <span>*</span></td>
                        <td><input class="input" type="text" name="first_name" id="first_name"></td>
                        <td id="error_message"></td>
                    </tr>
                    <tr>
                        <td> Enter Middle Name: </td>
                        <td><input type="text" name="middle_name" id="middle_name"></td>
                        <td id="error_message"></td>
                    </tr>
                    <tr>
                        <td> Enter Last Name: <span>*</span></td>
                        <td><input type="text" name="last_name" id="last_name"></td>
                        <td id="error_message"></td>
                    </tr>
                    <tr>
                        <td> Enter Email: <span>*</span></td>
                        <td><input type="text" name="email" id="email"></td>
                        <td id="error_message"></td>
                    </tr>
                    <tr>
                        <td> Enter Phone Number: <span>*</span></td>
                        <td><input type="text" name="phone_number" id="phone_number"></td>
                        <td id="error_message"></td>
                    </tr>
                    <tr>
                        <td>Select Gender : <span>*</span> </td>
                        <td> <input type="radio" name="gender" value="male" id="male">Male</td>
                        <td> <input type="radio" name="gender" value="femmale" id="female">Female</td>
                        <td id="error_message"></td>
                    </tr>
                    <tr>
                        <td>Choose Country <span>*</span> </td>

                        <td>
                            <select name="country" id="country">
                                <option value="0">--- Select Country ---</option>
                                <option value="Pakisan">Pakistan</option>
                                <option value="Iran">Iran</option>
                                <option value="China">China</option>
                            </select>
                        </td>
                        <td id="error_message"></td>
                    </tr>
                    <tr>
                        <td>Policies <span>*</span> </td>
                        <td><input type="checkbox" name="checkbox" id="checkbox" value="Attendance"> Attendance </td>
                        <td><input type="checkbox" name="checkbox" id="checkbox" value="Attendance"> Assignment</td>
                        <td><input type="checkbox" name="checkbox" id="checkbox" value="Attendance"> Tests </td>
                        <td><input type="checkbox" name="checkbox" id="checkbox" value="Attendance"> Disciplane</td>
                        <td id="error_message"></td>
                    </tr>
                    <!-- <br> -->
                    <tr>
                        <td></td>
                        <!-- <br> -->
                        <td> <input type="submit" value="submit" id="submit"> </td>
                    </tr>
                </table>
            </fieldset>
        </form>
    </center>
</body>
<script>
    function Validation() {
        var flag = true;
        var fname = document.getElementById("").value;
        var pname = /^[0-9]{8,16}$/;




        if (flag == true) {
            return true;
        } else {
            return false;
        }

        return true;
    }
</script>

</html>