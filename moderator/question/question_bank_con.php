<?php 

 


$servername = "localhost";
$username = "root";
$password = "";
$db_1="question_bank";

// Create connection
$conn_que = new mysqli($servername,$username,$password,$db_1);

// Check connection
if ($conn_que->connect_error) {
  die("Connection failed: " . $conn_que->connect_error);
}
//echo "Connected successfully";
 




// $servername = "localhost";
// $username = "root";
// $password = "";
$db_2="specification_table";

// Create connection
$conn_st = new mysqli($servername,$username,$password,$db_2);

// Check connection
if ($conn_st->connect_error) {
  die("Connection failed: " . $conn_st->connect_error);
}
//echo "Connected successfully";
 



$db_3="question_paper";

// Create connection
$conn_pp = new mysqli($servername,$username,$password,$db_3);

// Check connection
if ($conn_pp->connect_error) {
  die("Connection failed: " . $conn_pp->connect_error);
}
//echo "Connected successfully";
 



?>