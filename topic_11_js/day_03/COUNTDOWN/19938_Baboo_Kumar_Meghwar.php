<!DOCTYPE html>
<html>

<head>
    <title>Count Down Assignment</title>
</head>

<body>
    <!-- <h1 id="hist"></h1> -->
    <center>
        <input type="text" name="time" id="hist" disabled>
    <br>
    <br>
        <button onclick="stopTimer()">Stop Timer</button>
        <button onclick="startTimer()">Start Timer</button>

    </center>






    <!-- 
    <img id="myimg" src="https://images.unsplash.com/photo-1599507593362-50fa53ed1b40?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NHx8cGhwfGVufDB8fDB8fA%3D%3D&w=1000&q=80" width="300px" height="300px"> -->

    <script>
        // function change() {
        //     hist.innerHTML = "Hidaya Trust";
        //     var image = document.getElementById('myimg');
        //     image.src = "https://cdn.educba.com/academy/wp-content/uploads/2019/03/Main-Components-of-PHP-2.png";
        // }

        // console.log(setTimeout("change()", 1000));
        // console.log(setInterval("alert('w')",1000));


        var hour = parseInt(prompt("Enter hour"));
        var minutes = parseInt(prompt("Enter minutes"));
        var seconds = parseInt(prompt("Enter seconds"));




        // var arr = ["a", "b", "c"];
        // var a = 0;

        var id = null;

        function startTimer() {
            id = setInterval("timer()", 1000);
        }

        function timer() {
            if (typeof(arr[a]) == "undefined") {
                a = 0;
            }
            hist.innerHTML = arr[a];
            a++;
        }

        function stopTimer() {
            clearInterval(id);
        }
    </script>
</body>

</html>