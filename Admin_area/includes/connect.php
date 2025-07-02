<?php

$conn=mysqli_connect('localhost','root','','retailstore');
if(!$conn){
    die("Connection failed:");
    mysqli_connection_error();
}

?>