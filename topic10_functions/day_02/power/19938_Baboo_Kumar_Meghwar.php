<!Doctype html>
<html>

<head>
    <title>
        Caluclate The Power
    </title>
</head>

<body style="background-color: black; font-weight: bold; font-family: serif; color:white;font-size:20px;">
    <center>
        <form action="#" method="POST" >
            <table>
                <tr>
                    <td>
                        <label>Enter Base: </label>
                    </td>
                    <td>
                        <input type="number" name="base" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Enter Power: </label>
                    </td>
                    <td>
                        <input type="number" name="power" required>
                    </td>
                </tr>
                <tr>
                    <td>

                    </td>
                    <td>
                        <input type="submit" name="result" value="result">
                    </td>
                </tr>

            </table>
        </form>
    </center>
</body>
<?php
if(isset($_POST['result'])){
    // echo "testing";
    $base = $_POST['base'];
    $power = $_POST['power'];

    function my_function($base, $power){
        $rep = 0;
        if($rep<=$power){
            $output = $base*$base;
            $c = $output * $base;
            echo "$c";
        }
        // echo 
        my_function($rep = $rep+1);
    }
    my_function($base, $power);
}
?>
</html>