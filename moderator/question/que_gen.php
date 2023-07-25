<?php   
session_start();
include('question_bank_con.php');
 
 $coursename = $_POST['coursename'];


$_SESSION['response'] = 1;

$sep_code = array();

$separation = explode(" ", $coursename);
$_SESSION['code'] = $separation[0];



$course = $separation[0]; 

 
function set_gen_up($final_array,$course){

include('question_bank_con.php');
$veri_set = "SELECT * FROM sets where code = '$course'";
$veri_set_up = mysqli_query($conn_pp,$veri_set);

$veri_set_fet = mysqli_fetch_array($veri_set_up);


for ($i=0; $i <= 11  ; $i++) { 

  if($veri_set_fet[$i] == null){
 $new_id = $i -1;
 $setno = "set{$new_id}";
 $fin_string = implode(',',$final_array);

$final_arr_up = "UPDATE sets SET $setno = '$fin_string' WHERE code = '$course'";
$final_arr_up_up = mysqli_query($conn_pp,$final_arr_up);

$i = 12;



  }else{
  }


}

header('location:../Modarator.php');

}

////////////////////////////////////////


$coursecode_st = "{$course}_st";


//echo $coursecode_st;
 $select_st= " SELECT * FROM $coursecode_st";
 $select_st_up = mysqli_query($conn_st,$select_st);

 $select_que_bank_ch = "SELECT * FROM $course";
 $select_que_bank_ch_up = mysqli_query($conn_que,$select_que_bank_ch);


 $num_rows_st = mysqli_num_rows($select_st_up);


  $final_array = array();



for ($i=0; $i <= $num_rows_st ; $i++) { 

	// code...

	while ($data = mysqli_fetch_array($select_st_up)) {
  $array_que = array();


		// code...
  $unit = $data['unit'];
  $level = $data['level'];
  $mark = $data['mark'];

  $select_que = "SELECT id FROM $course where unit ='$unit' And level = '$level' AND mark = '$mark' ";


  $select_que_up = mysqli_query($conn_que,$select_que);
 



$select_que_num = mysqli_num_rows($select_que_up);


// if rows is 0 

if ($select_que_num == 0) {
  
?>
<script>
  
alert("question doesn't exists for unit : <?php echo $unit;  ?>, level: <?php echo $level;  ?> ");

</script>
<?php 

    // redirection  



}

for ($i=1; $i <= $select_que_num ; $i++) { 


 $fetch_que = mysqli_fetch_array($select_que_up);




//question repetation check

 if (in_array($fetch_que[0], $final_array)) {
  
  	?>

<br>

  	<?php 
  

  }else{
  array_push($array_que,$fetch_que[0]);


array_unshift($array_que,7);
unset($array_que[0]);

 $seq_mod_array_que = array_values($array_que);
}


}




 
 ?>
<br>
 <?php 

 $array_count = count($array_que);

 $rand_num = rand(1,$array_count);

$rand_cp = $rand_num;

 array_push($final_array,$array_que[$rand_cp]);

   array_values($array_que);

array_unshift($array_que,5);
   unset($array_que[0]);


?> <br> <?php 
?> <br> <?php 

}


?>
<br>
<?php 

  

   

	}




$veri_set = "SELECT * FROM sets where code = '$course'";
$veri_set_up = mysqli_query($conn_pp,$veri_set);

$veri_set_fet = mysqli_fetch_array($veri_set_up);


if ($veri_set_fet != NULL) {
  // code...

      set_gen_up($final_array,$course);
}else{
   $in_code = "INSERT INTO sets(code)VALUES('$course')";
   $in_code_up = mysqli_query($conn_pp,$in_code);


$veri_set = "SELECT * FROM sets where code = '$course'";
$veri_set_up = mysqli_query($conn_pp,$veri_set);

$veri_set_fet = mysqli_fetch_array($veri_set_up);


   set_gen_up($final_array,$course);




}










?>