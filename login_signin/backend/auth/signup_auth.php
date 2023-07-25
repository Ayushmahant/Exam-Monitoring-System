<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

 
	<?php

include('../../../connection/auth_db_con.php');



  // $user= "SHREE";
  //   $pass ="part7656h";
  //   $role = "Valuer";


    $user= $_POST['user'];
    $pass = $_POST['pass'];
    $role = $_POST['role'];


   
    

    switch ($role) {	
      //principle 
    	case "Principle":
         
         $veri = "SELECT * FROM auth_principal_coe WHERE user='$user' AND pass='$pass'";

         $veriup = mysqli_query($conn,$veri);

         $fetarray = mysqli_fetch_array($veriup);

         $fetarray_num = mysqli_num_rows($veriup);

         if ($fetarray_num <= 0) {
           // code...
        
        //new user 
    	
    	$up= "INSERT INTO auth_principal_coe(user,pass,role)VALUES('$user','$pass','$role')";
    	$updb = mysqli_query($conn,$up);

      ?>
<script type="text/javascript">
  alert("SignIn Successfully");
  location="../login.php";
</script>

      <?php 


}else{

    //old user 
   ?>
 <script type="text/javascript">
  alert("This username already exists.");
  location="../signin.php";
</script>

      <?php 

}
         break;



        //coe 
    	case "COE":

  $veri = "SELECT * FROM auth_principal_coe WHERE user='$user' AND pass='$pass'";

         $veriup = mysqli_query($conn,$veri);

         $fetarray = mysqli_fetch_array($veriup);

         $fetarray_num = mysqli_num_rows($veriup);

         if ($fetarray_num <= 0) {
           // code...
        
        //new user 
        
        $up= "INSERT INTO auth_principal_coe(user,pass,role)VALUES('$user','$pass','$role')";
        $updb = mysqli_query($conn,$up);

      ?>
<script type="text/javascript">
  alert("SignIn Successfully");
  location="../login.php";
</script>

      <?php 


}else{

    //old user 
   ?>
 <script type="text/javascript">
  alert("This username already exists.");
  location="../signin.php";
</script>

      <?php 

}

    	break;
    




      //moderator
    		case "Moderator":

 $veri = "SELECT * FROM auth_moderator WHERE user='$user' AND pass='$pass'";

         $veriup = mysqli_query($conn,$veri);

         $fetarray = mysqli_fetch_array($veriup);

         $fetarray_num = mysqli_num_rows($veriup);

         if ($fetarray_num <= 0) {
           // code...
        
        //new user 
        
        $up= "INSERT INTO auth_moderator(user,pass,role)VALUES('$user','$pass','$role')";
        $updb = mysqli_query($conn,$up);

      ?>
<script type="text/javascript">
  alert("SignIn Successfully");
  location="../login.php";
</script>

      <?php 


}else{

    //old user 
   ?>
 <script type="text/javascript">
  alert("This username already exists.");
  location="../signin.php";
</script>

      <?php 

}
         
   break;

	case "Valuer":
  //valuer

 $veri = "SELECT * FROM auth_valuer WHERE user='$user' AND pass='$pass'";

         $veriup = mysqli_query($conn,$veri);

         $fetarray = mysqli_fetch_array($veriup);

         $fetarray_num = mysqli_num_rows($veriup);

         if ($fetarray_num <= 0) {
           // code...
        
        //new user 
        
        $up= "INSERT INTO auth_valuer(user,pass,role)VALUES('$user','$pass','$role')";
        $updb = mysqli_query($conn,$up);

      ?>
<script type="text/javascript">
  alert("SignIn Successfully");
  location="../login.php";
</script>

      <?php 


}else{

    //old user 
   ?>
 <script type="text/javascript">
  alert("This username already exists.");
  location="../signin.php";
</script>

      <?php 

}

    	break;

    	default:
    		?>
    		<script>
    			alert("Please try again");
                  location="../signin.php";

    		</script>

    		<?php
    		break;
    }
   




	 ?>

</body>
</html>
