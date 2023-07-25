<?php 
session_start();
include ('../../../connection/coe_db_con.php');
// include ('../../../connection/question_bank_db_con.php');



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
 

$db="question_bank";

// Create connection
$conn_qebk = new mysqli($servername,$username,$password,$db);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$branch = $_POST['branch'];

$sem = $_POST['sem'];
$coursecode = $_POST['coursecode'];
$coursename = $_POST['coursename'];



//  $branch ="etx";

// $sem ="even";
// $coursecode ="ec701e";
//  $coursename = "dt";
$_SESSION['subject_code_input'] = $coursecode;


$code_ck = "SELECT id from subject where coursecode = '$coursecode' ";
$code_ck_up = mysqli_query($conn,$code_ck);

if (mysqli_fetch_array($code_ck_up)== null) {
	
	$in_sub = "INSERT INTO subject(dept,sem,coursecode,coursename)Values('$branch','$sem','$coursecode','$coursename') ";
 $in_sub_up = mysqli_query($conn,$in_sub);	

 $gen_tb_quebk = "
CREATE TABLE $coursecode (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
unit VARCHAR(30) NOT NULL,
level VARCHAR(30) NOT NULL,
mark VARCHAR(50) NOT NULL,
question VARCHAR(255) NOT NULL ,
image VARCHAR(255) NOT NULL
)";

$gen_tb_quebk_up = mysqli_query($conn_qebk,$gen_tb_quebk);

$coursecode_st = "{$coursecode}_st";

 $gen_tb_quest = "
CREATE TABLE $coursecode_st (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
unit VARCHAR(30) NOT NULL,
level VARCHAR(30) NOT NULL,
mark VARCHAR(50) NOT NULL

)";

$gen_tb_quebk_up = mysqli_query($conn_st,$gen_tb_quest);
// $_SESSION['subject_code_input'] = $coursecode;

?>

<script type="text/javascript">
	
	alert("Subject registered successfully. Enter specification table for the subject. ");
	window.location = "../add_spec.php";
</script>

<?php 


}else{

?>

<script type="text/javascript">
	
	alert("This Subject is already registered. ");
	window.location = "../add_sub_final.php";
</script>

<?php 

}










?>