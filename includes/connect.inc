<?php
$servername = "localhost";
$username = "digitech";
$password = "successful badger";
$db = "danielbtraps";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $db);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}


?>
