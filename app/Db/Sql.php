<?php 


 $servername = "localhost";
 $database = "login";
 $username = "root";
 $password = "";

 // Create connection
 $conn = mysqli_connect($servername, $username, $password, $database);
 $sql = $conn->query("Select * From patients");

// $status = $conn->query("SELECT * FROM patients ORDER BY ID DESC LIMIT 1");
//  Check connection
//   if (!$conn) {
//      die("Connection failed: " . mysql_connect_error());
//  }

//  echo "Connected successfully";
//  mysqli_close($conn);


?>
