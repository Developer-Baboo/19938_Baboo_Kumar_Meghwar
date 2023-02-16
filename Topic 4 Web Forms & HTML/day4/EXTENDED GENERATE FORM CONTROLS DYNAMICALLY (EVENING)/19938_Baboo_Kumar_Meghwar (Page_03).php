<!DOCTYPE html>
<html>
    <head>
        <title>Page_03</title>
    </head>
    <body>
        <?php
            if (isset($_POST['submit'])) 
            {
                echo $_POST['name'];
                echo "If Condition";
            } 
            else 
            {
                echo "Not Set";
            }
            
        ?>
    </body>
</html>

