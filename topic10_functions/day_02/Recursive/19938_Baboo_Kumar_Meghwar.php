<!Doctype html>
<html>

<head>
  <title>
    Power
  </title>
</head>

<body style="background-color: black; font-weight: bold; font-family: serif; color:white;font-size:20px; border: 4px solid red; border-radius: 20px; padding: 30px 0px 20px 50px;">
  <center> <h1>Even and Odd list</h1> </center>
  <?php
  function print_Even($a)
  {
    if ($a < 2) {
      return;
    }
    if ($a % 2 === 0) {
      echo $a . " ";
    }
    print_Even($a - 1);
  }

  print_Even(100);

  echo "<br/>";
  echo "<br/>";



  function print_Odd($b)
  {
    if ($b < 1) 
    {
      return;
    }
    if ($b % 2 !== 0) {
      echo $b . " ";
    }
    print_Odd($b - 1);
  }
  print_Odd(50);
  ?>




</body>

</html>