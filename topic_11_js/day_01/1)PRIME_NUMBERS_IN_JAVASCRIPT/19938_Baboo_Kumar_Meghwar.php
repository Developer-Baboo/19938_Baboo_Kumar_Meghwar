<!DOCTYPE html>
<html>

<head>
    <title>Prime number in js</title>
</head>

<body style="background-color:blue ; font-weight: bold; font-family: serif; color:white;font-size:20px; border: 10px inset green; border-radius: 20px; padding: 30px 0px 100px 100px;">
<h1>PRIME NUMBER IN JS</h1>
    <script>
        // document.write("")
        for (a = 2; a <= 190; a++) 
        {
            isPrime = true
            for (b = 2; b < a; b++) {
                if (a % b == 0) {
                    isPrime = false
                    break
                }
            }
            if (isPrime) 
            {
                document.write(a+"&nbsp")
            }
        }
    </script>
</body>

</html>