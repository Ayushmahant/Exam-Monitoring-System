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




$id = $_GET['id'];
$code= $_GET['code'];


$del = "DELETE FROM $code WHERE id = '$id'";
$del_up = mysqli_query($conn,$del);


if ($del_up) {
	// code...
?> 

<script>
	
alert("Question Deleted Successfully");
window.location = "../view_questionBank.php";
</script>

<?php 

}else{
	?> 

<script>
	
alert("There is a error please try again.");
window.location = "../view_questionBank.php";
</script>

<?php 
}


 ?>
