<!DOCTYPE html>
<html>

<head>
    <title>Checkbox Example</title>
    <style>
        * {
            background-color: yellowgreen;
            font-family: sans-serif;
            color: blue;
            font-size: 30px;
            font-weight: bold;
        }

        input[type="checkbox"] {
            transform: scale(2);
            margin-right: 15px;
        }

        hr {
            color: blue;
        }
    </style>
</head>

<body>
    <center>
        <input type="checkbox" id="checkbox-all" onchange="select_all(this)" />
        <label>Select all Items</label>
        <hr>
        <input type="checkbox" id="checkbox-1" onchange="single()" />
        <label>Product 01 </label>
        <br>
        <input type="checkbox" id="checkbox-2" onchange="single()" />
        <label>Product 02</label>
        <br>
        <input type="checkbox" id="checkbox-3" onchange="single()" />
        <label>Product 03</label>
        <br>
        <input type="checkbox" id="checkbox-4" onchange="single()" />
        <label>Product 04</label>
    </center>
    <script>
        function select_all(source) {
            var values = document.querySelectorAll('input[type="checkbox"]:not(#checkbox-all)');
            var a = 0;
            while (a < values.length) {
                values[a].checked = source.checked;
                a++;
            }
        }

        function single() {
            var values = document.querySelectorAll('input[type="checkbox"]:not(#checkbox-all)');
            var allChecked = true;
            var b = 0;
            do {
                if (!values[b].checked) {
                    allChecked = false;
                    break;
                }
                b++;
            } while (b < values.length);
            document.getElementById("checkbox-all").checked = allChecked;
        }
    </script>
</body>

</html>