<!DOCTYPE html>
<html>

<head>
    <title>SEARCH RECORD THROUGH CNIC USING AJAX</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: lightblue;
        }

        h1 {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #007bff;
            color: #fff;
            padding: 10px;
            border-radius: 10px;
            text-align: center;
        }

        form {
            width: 50%;
            margin: 0 auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        td {
            padding: 10px;
            font-size: 16px;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 2px solid #007bff;
            border-radius: 3px;
            font-size: 16px;
        }

        input[type="button"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 20px 40px;
            border-radius: 10px;
            cursor: pointer;
        }

        input[type="button"]:hover {
            background-color: #0069d9;
        }

        .error-message {
            color: red;
            margin-top: 10px;
        }
    </style>



    <script>
        function searchCNIC() {
            var cnic = document.getElementById('cnic').value;
            if (cnic == "") {
                document.getElementById('result').innerHTML = "";
                return 1;
            }
            var obj;
            if (window.ActiveXObject) {
                obj = new ActiveXObject("Microsoft.XMLHTTP");
            } else {
                obj = new XMLHttpRequest();
            }
            obj.onreadystatechange = function() {
                if (obj.readyState == 4 && obj.status == 200) {
                    document.getElementById('result').innerHTML = obj.responseText;
                }
            }
            obj.open("POST", 'process.php');
            obj.setRequestHeader("content-type", "application/x-www-form-urlencoded");
            obj.send("action=search_cnic&cnic=" + cnic);
        }
    </script>











</head>

<body>
    <h1>SEARCH RECORD THROUGH CNIC USING AJAX</h1>
    <form>
        <label for="cnic">Enter CNIC:</label>
        <input type="text" id="cnic" name="cnic">
        <input type="button" value="Search" onclick="searchCNIC()">
    </form>
    <div id="result"></div>
</body>

</html>