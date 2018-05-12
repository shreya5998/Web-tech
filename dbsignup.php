<?php

$con = mysqli_connect("localhost","root","","signup");
//"register" is the name of database.
//"users" is the name of the table in the above database. 
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>
