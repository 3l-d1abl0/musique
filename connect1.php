<?php
$server="servername";
$name="username";
$password="password";
$database="databasename";
$con=mysqli_connect($server,$name,$password,$database);
if(!$con)
echo 'connection failed';
?>