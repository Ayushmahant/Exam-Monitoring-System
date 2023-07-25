<!DOCTYPE html>
<html>
<head> 
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
   
<?php 

include('../../connection/coe_db_con.php');


  $fetch = "SELECT id,name,institute,coursecode,mobile FROM moderator ";

  $fetchup = mysqli_query($conn,$fetch);


  $numrows = mysqli_num_rows($fetchup);


   




?>

</body>
</html>