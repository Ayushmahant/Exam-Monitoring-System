<?php 



$servername = "localhost";
$username = "root";
$password = "";
$db="question_bank";

// Create connection
$conn = new mysqli($servername,$username,$password,$db);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";






// $servername = "localhost";
// $username = "root";
// $password = "";
// $db="coe_func";

// // Create connection
// $conn = new mysqli($servername,$username,$password,$db);

// // Check connection
// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// }
// echo "Connected successfully";

?>