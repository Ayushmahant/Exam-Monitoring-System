<?php  



  

$servername = "localhost";
$username = "root";
$password = "";
$db="coe_func";

// Create connection
$conn = new mysqli($servername,$username,$password,$db);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";
 





$date = $_POST['date'];



 // $date = date('Y-m-d',$dt);



$dept = $_POST['dept'];

$sem = $_POST['sem'];

$code = $_POST['code'];

$nostd = $_POST['nostd'];

echo $date;

$in_date = "INSERT INTO timetable(dt,dept,sem,coursecode,nostd)VALUES('$date','$dept','$sem','$code','$nostd')";

$in_date_up = mysqli_query($conn,$in_date);


if ($in_date_up) {
	// code...

	?>

<script type="text/javascript">
	alert("Details inserted successfully");

	window.location = "../insert_timetable.php";
</script>


	<?php 
}else{

?>

<script type="text/javascript">
	alert("Details not inserted successfully");

	window.location = "../insert_timetable.php";
</script>


	<?php 

}
















?>