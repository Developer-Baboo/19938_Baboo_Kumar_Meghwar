<?php
$connection = mysqli_connect('localhost', 'root', '', 'ajax_curd');
if (isset($_REQUEST['title'])&& $_REQUEST['summary'] && $_REQUEST['description']) 
{
    $insert = mysqli_query($connection, "INSERT INTO posts (`title`,`summary`,`description`) VALUES('" . $_REQUEST['title']. "','" . $_REQUEST['summary'] . "','" . $_REQUEST['description']. "')");
    
}
