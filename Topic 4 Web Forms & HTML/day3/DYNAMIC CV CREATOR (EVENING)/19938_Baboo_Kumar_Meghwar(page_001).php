<!DOCTYPE html>
<html>

<head>
    <title>Personal Information</title>
</head>

<body>
    <form method="POST" action="page2.php">
        <table>
            <tr>
                <td>
                    <label for="name">Name:</label>
                    <input required type="text" id="name" name="f_name">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="father_name">Father's Name:</label>
                    <input required type="text" id="father_name" name="father_name">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="gender">Gender: </label>
                    <label for="male">Male</label>
                    <input type="radio" id="male" name="gender" value="male" required>

                    <label for="female">Female</label>
                    <input type="radio" id="female" name="gender" value="female" required>

                    <label for="other">Other</label>
                    <input type="radio" id="other" name="gender" value="other" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="country">Country:</label>
                    <select required id="country" name="country">
                        <option value="India">India</option>
                        <option value="USA">USA</option>
                        <option value="Canada">Canada</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="submit" value="submit">
                </td>
            </tr>
        </table>
    </form>
</body>

</html>