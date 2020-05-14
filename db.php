<?php
// Enter your Host, username, password, database below.
// I left password empty because i do not set password on localhost.
$servername = "localhost";
$username = "oadvanta_linke";
$password = "Lv6zC4Ndt2KW";
$dbname = "oadvanta_linkedin";

// $con = mysqli_connect($servername, $username, $password, $dbname);
$con = mysqli_connect("localhost","root","","linkedin");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$con -> set_charset("utf8mb4");

?>