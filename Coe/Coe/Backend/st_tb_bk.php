<?php 
session_start();

$coursecode = $_SESSION['subject_code_input'];
$coursecode_st = "{$coursecode}_st";

$servername = "localhost";
$username = "root";
$password = ""; 

$db_2="specification_table";

// Create connection
$conn_st = new mysqli($servername,$username,$password,$db_2);

// Check connection
if ($conn_st->connect_error) {
  die("Connection failed: " . $conn_st->connect_error);
}
//echo "Connected successfully";
 

for ($i=1; $i <= 32 ; $i++) { 
	// code...

 $unit = $_POST['unit'.$i];
  $level = $_POST['level'.$i];
 $mark = $_POST['mark'.$i];




$st_chinal_up = "INSERT INTO $coursecode_st(unit,level,mark)VALUES('$unit','$level','$mark')";
$st_chinal_up_up = mysqli_query($conn_st,$st_chinal_up);


// $unit = unit{$i}';
 // echo $unit;
}


?>  
<script type="text/javascript">
	alert("Specification table added succesfully");
	window.location = "../add_sub_final.php";
</script>


<?php 



 ?>