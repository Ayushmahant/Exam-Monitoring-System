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







 $filename = $_FILES["img"]["name"];

    $tempname = $_FILES["img"]["tmp_name"];  


$cours = $_POST['course'];

$course=strtolower($cours);

$unit = $_POST['unit'];

$mark = $_POST['mark'];

$level = $_POST['level'];

$que_updated = $_POST['question'];

        $folder = "../../image/".$filename;   
  if (move_uploaded_file($tempname, $folder)) {

            $msg = "Image uploaded successfully";

        }else{

            $msg = "Failed to upload image";

    }


$qid = $_GET['qid'];
// $set = $_GET['set'];
// $pid = $_GET['pid'];
// echo $id;
// echo $set;


if ($filename == "") {
    // code...

$que = "UPDATE $course SET unit = '$unit' , level = '$level' , mark = '$mark' , question = '$que_updated'  WHERE id = '$qid' ";

$que_up = mysqli_query($conn,$que);


if ($que_up) {
    // cod
  
  echo "yes";

  ?>

<script type="text/javascript">
       window.location = "../view_questionBank.php";
</script>


  <?php 


}else{

    echo"no";
}

}else{



$que = "UPDATE $course SET unit = '$unit' , level = '$level' , mark = '$mark' , question = '$que_updated' , image = '$filename' WHERE id = '$qid' ";

$que_up = mysqli_query($conn,$que);


if ($que_up) {
	// cod
  
  echo "yes";

  ?>

<script type="text/javascript">
       window.location = "../view_questionBank.php";
</script>


  <?php 


}else{

	echo"no";
}
}
?>