<?php 


$servername = "localhost";
$database = "login";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
$sql = $conn->query("Select * From patients");

//  Check connection
//   if (!$conn) {
//      die("Connection failed: " . mysql_connect_error());
//  }

//  echo "Connected successfully";
//  mysqli_close($conn);

   
?>
