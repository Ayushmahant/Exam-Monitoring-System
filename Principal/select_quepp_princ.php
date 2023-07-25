<?php 
session_start();
  

$servername = "localhost";
$username = "root";
$password = "";
$db="principal";

// Create connection
$conn = new mysqli($servername,$username,$password,$db);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";
 



$id = $_GET['id'];

$code = $_GET['code'];
$date = $_GET['date'];
echo "heloo";
// $id= 2;
// $code = "EC101G";




$ch_ex = "SELECT id FROM principal_que_pp where code = '$code'";
$ch_ex_up = mysqli_query($conn,$ch_ex);

 
$_SESSION['date'] = $date;

if (mysqli_num_rows($ch_ex_up) == 0) {
  // code...
echo "he";
$id_in = "INSERT INTO principal_que_pp(code,setno)VALUES('$code','$id')";
$id_in_up = mysqli_query($conn,$id_in);


$_SESSION['code'] = $code;


 ?>
<script type="text/javascript">
  alert("This question set is  selected for <?php echo $code; ?> ");
window.location = "Set_selection.php?date=<?php echo $date; ?>";



</script>
<?php 

}else{

$date = $_SESSION['date'];


  ?>
<script type="text/javascript">
  alert("This question set is already selected for <?php echo $code; ?> ");
window.location = "Set_selection.php?date=<?php echo $date; ?>";

</script>
  <?php 

}







































  ?>



