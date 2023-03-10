<!DOCTYPE html>
<html>

<head>
    <title> Fibonacci Series in JS </title>
</head>

<body style="background-color:lightgreen ; font-weight: bold; font-family: serif; color:white;font-size:40px; border: 10px dashed red; border-radius: 20px; padding: 30px 0px 20px 100px;">
    <script>
        first = 0
        second = 1
        series = first + ", " + second
        document.write("Kindly Check Console.Log For Output")
        while (second + first <= 34) {
            third = second + first
            series = series + ", " + third
            // series += ", " + third_number;
            first = second;
            second = third;
        }

        console.log(series);
    </script>
</body>

</html>