<?php

session_start();

session_destroy();
header("Location:index_01.php?color=green&msg= Your Are Logged Out Successfully!..");
?>