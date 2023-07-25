<?php 


include('../../../connection/coe_db_con.php');



$separation = $_POST['code'];


$separation = explode(".", $separation);
$code = $separation[0];
$cname = "{$separation[1]}";

$name = $_POST['name'];

echo $cname;




$fet_code = "SELECT * FROM moderator where name = '$name'";
$fet_code_up = mysqli_query($conn,$fet_code);



	$fetarr = mysqli_fetch_array($fet_code_up);



       $codes = explode(",", $fetarr[6]);
array_push($codes,$code);
        $codes_str = implode(",",$codes);
// echo $codes_str;


//name


	
       $codes_name = explode(",", $fetarr[7]);
array_push($codes_name,$cname);
        $codes_name_str = implode(",",$codes_name);
// echo $codes_name_str;





$query = "UPDATE moderator SET coursename = '$codes_name_str',coursecode = '$codes_str' WHERE name = '$name' ";

$query_up = mysqli_query($conn,$query);

if ($query_up) {
	?>
<script type="text/javascript">
	alert("Coursecode assigned Successfully");
		window.location = "../Assign_moderator.php";

</script>

	<?php 
	// code...
	// header('location:../Assign_valuver.php');
}else{

		?>
<script type="text/javascript">
	alert("Coursecode not assigned Successfully");
	window.location = "../Assign_moderator.php";
</script>

	<?php 
		// header('location:../Assign_valuver.php');

}



?>