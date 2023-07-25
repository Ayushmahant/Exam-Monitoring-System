<?php  
include('question_bank_con.php');
include('../connection/coe_db_con.php');
error_reporting(E_ERROR | E_PARSE);
 $id = $_GET['id'];


$setno = $_GET['setno'];

 $set = "set{$_GET['setno']}";
 global $img_arr;
$img_arr = array();


 
 // echo $id;
 // echo $set; 

// $id = 7;

// $set = "set1";


$fet_query = "SELECT code,$set FROM sets WHERE id = '$id' ";

$fet_query_up = mysqli_query($conn_pp,$fet_query);

$fetch = mysqli_fetch_array($fet_query_up);

$fetch_str =  $fetch[1];

 // echo $fetch_str;

$que_arr = explode(",", $fetch_str);
$code = $fetch[0];

// echo $code;

 // echo $que_arr[1];



// $name_one = array("Zack", "Anthony", "Ram", "Salim", "Raghav");


 function fetque($id,$code,&$arr){

//  echo $id;
// echo $set; 

include('question_bank_con.php');

  $getque = "SELECT * FROM $code where id = '$id' ";
$getque_up = mysqli_query($conn_que,$getque);

$fet_getque = mysqli_fetch_array($getque_up);

if ($fet_getque[5] == null ) {

$fn_que = $fet_getque[4];

}else{

if (array_push($arr,"{$fet_getque[5]}")) {
    // code...
$cn = end(array_keys($arr)) + 1;

 $fn_que ="{$fet_getque[4]} FIG{$cn}";


  }  



}


return $fn_que;


 }

 


 function fetid($id,$code){

//  echo $id;
// echo $set; 

include('question_bank_con.php');

  $getque = "SELECT * FROM $code where id = '$id' ";
$getque_up = mysqli_query($conn_que,$getque);

$fet_getque = mysqli_fetch_array($getque_up);

$fn_que = $fet_getque[0];

return $fn_que;



 } 


 function fetlevel($id,$code){

 // echo $id;
// echo $code; 

include('question_bank_con.php');

  $getque = "SELECT * FROM $code where id = '$id' ";
$getque_up = mysqli_query($conn_que,$getque);

$fet_getque = mysqli_fetch_array($getque_up);

$fn_que = "{$fet_getque[1]}{$fet_getque[2]}{$fet_getque[3]} ";

return $fn_que;



 }




$sub_name = "SELECT dept,coursename FROM subject WHERE coursecode = '$code'";

$sub_name_up = mysqli_query($conn,$sub_name);

$sub_name_fet =  mysqli_fetch_array($sub_name_up);













?>