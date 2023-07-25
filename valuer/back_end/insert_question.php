<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>in_que</title>
</head>
<body>



<?php 

include('../../connection/question_bank_db_con.php');




 $filename = $_FILES["img"]["name"];

    $tempname = $_FILES["img"]["tmp_name"];  


$cours = $_POST['course'];

$course=strtolower($cours);

$unit = $_POST['unit'];

$mark = $_POST['mark'];

$level = $_POST['level'];

$que = $_POST['question'];



        $folder = "../../image/".$filename;   
  if (move_uploaded_file($tempname, $folder)) {

            $msg = "Image uploaded successfully";

        }else{

            $msg = "Failed to upload image";

    }





$que = "INSERT INTO $course(unit,level,mark,question,image) VALUES('$unit','$level','$mark','$que','$filename') ";

$que_up = mysqli_query($conn,$que);


if ($que_up) {
	// cod
  
  echo "yes";

?>

<script type="text/javascript">
    alert("Question Inserted Successfully");
    window.location = "../Add_question.php";
</script>


<?php 


}else{




?>

<script type="text/javascript">
    alert("Please try again.");
    window.location = "../Add_question.php";

</script>


<?php 
}







































































































































// $question = $_POST['question'];

// $coursecode = $_POST['coursecode'];

//  $unit = $_POST['unit'];

//  $level = $_POST['level'];

//  $mark = $_POST['mark'];


//$file = $_POST['file'];

// if(isset($_POST['submit'])){
//  $file = $_FILES['file']['tmp_name'];




 // if (is_uploaded_file($_FILES['file']['tmp_name'])) {
 //        $imgData = file_get_contents($_FILES['file']['tmp_name']);
 //        $imgType = $_FILES['file']['type'];
 //        $sql = "INSERT INTO file(file) VALUES(?)";
 //        $statement = $conn->prepare($sql);
 //        $statement->bind_param( $imgData);
 //        $current_id = $statement->execute() or die("<b>Error:</b> Problem on Image Insert<br/>" . mysqli_connect_error());
 //    }






 // $imgData = file_get_contents($_FILES['file']['tmp_name']);
 //        $imgType = $_FILES['file']['type'];
       // $sql = "INSERT INTO (imageType ,imageData) VALUES(?, ?)";
       // $statement = $conn->prepare($sql);
        //$statement->bind_param('ss', $imgType, $imgData);
       // $current_id = $statement->execute() or die("<b>Error:</b> Problem on Image Insert<br/>" . mysqli_connect_error());



// $question_upload = "INSERT INTO file(file) VALUES ('$imgData')";

// $question_query = mysqli_query($conn,$question_upload);

//}



// $fet = "SELECT * FROM file";
// $fetup = mysqli_query($conn,$fet);
// $num = mysqli_num_rows($fetup);
// if ($num > 0 ) {
// 	// code...


// while ($fetch_dis = mysqli_fetch_array($fetup)) {
	// code...
	//echo $fetch_dis['id'];
	//$img = base64.b64decode($fetch_dis['file']);





?>
<!--  <h1>hi </h1> -->
	 <!--  // echo '<img style="width:100%" src="data:image/jpeg/jpg/png;base64"/>';
	  	 // echo '<img style="width:100%" src="img.jpeg"/>'; -->

	   ?> 
	 <!--   <img alt="go to hell" src="data:image/jpeg;base64,<?php echo $img;?>"/>
	<h5>hi</h5> -->

<!-- <img src="data:image/jpeg;base64,' base64_encode($fetch_dis['file'])?>'"/> -->

	<?php 
//}
//}

?>







</body>
</html>