<?php
    $host = "localhost";
    $dbUsername = "";
    $dbPassword = "";
    $dbname = "";
$con = mysqli_connect($host,$dbUsername,$dbPassword,$dbname);
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>