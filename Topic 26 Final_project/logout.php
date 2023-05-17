<?php

session_start();

session_destroy();
header("Location:index_01.php?color=green&msg= You has been Logged Out Successfully!..");
?>