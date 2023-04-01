<!DOCTYPE html>
<html>

<head>
    <title>Marksheet in Switch and If</title>
</head>

<body style="background-color:blue ; font-weight: bold; font-family: serif; color:white;font-size:20px; border: 10px dashed red; border-radius: 20px; padding: 30px 0px 20px 100px;">
    <h1>Marksheet in Switch and If</h1>
    <script>
        document.write("***********************************Marksheet in IF ********************************<br/> ")
        sub1 = 90
        sub2 = 80
        sub3 = 70
        sub3 = 00
        sub4 = 50
        sub5 = 75
        total = sub1 + sub2 + sub3 + sub4 + sub5
        document.write("Your Total Marks are 500")
        document.write("<br />")
        document.write("Your obtained marks are: " + total)
        // document.write("<br />")
        percentage = total * 100 / 500;
        document.write("<br />")
        document.write("Your percentage is : " + percentage)
        document.write("<br />")

        if (sub1 > 40 && sub2 > 40 && sub3 > 40 && sub4 > 40 && sub5 > 40) {
            if (percentage >= 40 && percentage <= 60) 
            {
                document.write("Your grade is C")
                document.write("<br />")
            }
            if (percentage >= 61 && percentage <= 79) {
                document.write("Your grade is B")
                document.write("<br />")
            }
            if (percentage >= 80 && percentage <= 89) {
                document.write("Your grade is A")
            }
            if (percentage >= 90 && percentage <= 100) {
                document.write("Your grade is A+")
            }
        }
        if (sub1 < 40 || sub2 < 40 || sub3 < 40 || sub4 < 40 || sub5 < 40) {
            document.write("You are failed")
            document.write("<br />")
        }




        document.write("<br/>***********************************Marksheet in Switch ********************************<br/> ")
        document.write("Your Total Marks are 500")
        document.write("<br />")
        document.write("Your obtained marks are : " + total)
        percentage = total * 100 / 500
        document.write("<br />")
        document.write("Your percentage is : " + percentage)
        document.write("<br />")
        switch (true) {
            case (sub1 < 40 || sub2 < 40 || sub3 < 40 || sub4 < 40 || sub5 < 40):
                document.write("Sorry! You are Failed.")
                break;
            case (percentage >= 40 && percentage <= 60):
                document.write("Your grade is C")
                document.write("<br />")
                break;
            case (percentage >= 61 && percentage <= 79):
                document.write("Your grade is B")
                document.write("<br />")
                break;
            case (percentage >= 80 && percentage <= 89):
                document.write("Your grade is A")
                document.write("<br />")
                break;
            case (percentage >= 90 && percentage <= 100):
                document.write("Your grade is A+")
                document.write("<br />")
                break;
        }
    </script>
</body>

</html>