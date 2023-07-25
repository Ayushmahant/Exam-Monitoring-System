
<?php session_start(); ?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <title>PRINCIPAL</title>
    <style>
        * { 
            margin: 0%;
            padding: 0%;

        }

        .body {
            background-color: #031863;
        }

        .body_of_login_page {
            width: 100%;
            background-color: #031863;
            height: 100%;
            display: flex;
        }

        .simple_form_box {
            background-color: aliceblue;
            height: 92.5%;
            width: 20%;
            justify-content: center;
            display: flex;
            flex-direction: column;
            padding: 25px;
            /* border: 1px solid black; */
            border-radius: 10px;
        }

        .username_input {
            display: flex;
            font-size: 13px;
            margin-top: 20px;
            margin-left: 20px;
        }

        .password_input {
            font-size: 13px;
            margin-top: 10px;
            margin-left: 20px;
            display: flex;
        }

        .input_feild {
            margin-left: 40px;
        }

        .box-input {
            width: 200px;
            height: 25px;
            margin-top: 5px;
            text-align: center;
        }

        .login-name {
            width: 100%;
            text-align: center;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        }

        .submit_button {
            display: flex;
            justify-content: center;
        }

        .forgot-password {
            width: 100%;
            text-align: center;
            color: rgb(1, 41, 28);
            text-decoration: none;
            margin-top: 20px;
        }

        .div-box {
            margin-left: 45px;
            margin-top: 20px;
        }

        .info {
            font-size: 22px;
            margin-top: 20PX;
            width: 100px;
        }

        .box-input {
            width: 330px;
            height: 40px;
            margin-top: 20PX;
            margin-left: 40px;
        }

        .add-rem-button {
            width: 230.5px;
            height: 35px;
            border-radius: 0%;
            /* border: none; */
            border: none;
            background-color: #82EEFD;
            color: rgb(0, 0, 0);
            margin-left: 5px;
            cursor: pointer;
            margin-right: 5px;
        }

        .div-box {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .three {
            margin-left: 4px;
        }

        .five {
            margin-left: 7px;
        }

        .six {
            margin-left: 7px;
        }

        .button {
            margin-left: -40px;
            margin-bottom: 100px;
        }

        .button_one {
            width: 337.5;
            height: 60px;
            margin-top: 70px;
            margin-left: 10px;
            margin-right: 10px;
            color: rgb(0, 0, 0);
            /* border: 1px solid black; */
            border: none;
            background-color: #82EEFD;
            cursor: pointer;
            transition: 0.5s;
            border-radius: 10px;
            font-size: 18px;
        }

        .button_one:hover {
            box-shadow: 10px 10px 5px rgb(230, 223, 173);
            transition: 0.5s;
        }

        .submit {
            width: 100%;
            display: flex;
            justify-content: center;
            margin-left: 20px;
        }

        .button_submit {
            width: 225px;
            height: 60px;
            background-color: rgb(111, 111, 111);
            border-radius: 10px;
            border: none;
            margin-top: 70px;
            margin-left: -32px;
            color: white;
            font-size: 19px;
            cursor: pointer;
        }

        .coe_options {
            margin-top: 40px;
            text-align: center;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        }

        .one_one {
            margin-top: 20px;
        }

        .one_two {
            margin-top: 20px;
        }

        .one_three {
            margin-top: 20px;
        }

        .box_button {
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            /* justify-content: space-around; */
            background-color: aliceblue;
            align-items: center;
        }

        .one {
            width: 280px;
            height: 60px;
            background-color: #82EEFD;
            border: none;
            border-radius: 10px;
            font-size: 18px;
            cursor: pointer;
            margin-top: 40px;
            margin-bottom: 40px;
            transition: 0.5s;

        }

        .one:hover {
            background-color: #eea369;
            transition: 0.5s;
        }

        .div-2 {
            width: 84%;
            height: 90%;
            border-radius: 20px;
            background-color: aliceblue;
            overflow-y: scroll;
        }

        .main-div {
            width: 80%;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
        }

        .heading {
            width: 100%;
            height: 100px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

         .bx-log-out:hover {
            color: #c86316;

        }
        .main{
            display: none;
        }
        .content{
            display: none;
        }
        .info_box {
            width: 100%;
            height: 55%;
            overflow-y: scroll;
            align-items: center;
            display: flex;
            flex-direction: column;
            margin-top: 40px;
        }
        .coe_options {
            margin-top: -80px;
            text-align: center;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            font-size: 60px;
        }
        .form_collector {
            display: flex;
            width: 100%;
        }
        .div_aplhanew {
            text-align: center;
            background-color: aliceblue;
            display: flex;
            justify-content: center;
            align-items: center;
            border: 1px solid black;
            height: 40px;
            font-weight: bold;
            text-align: center;
            display: flex;
            justify-content: center;
        }
        .div_one_new {
            width: 14.9%;
        }
        
        .div_two_new {
            width: 19.8%;
        }
        
        .div_three_new {
            width: 25%;
        }
        
        .div_four_new {
            width: 40%;
        }
        .form_collector_new {
            display: flex;
            width: 100%;
        }
        .div_aplha {
            text-align: center;
            background-color: aliceblue;
            display: flex;
            justify-content: center;
            align-items: center;
            border: 1px solid black;
            height: 40px;
            text-align: center;
            display: flex;
            justify-content: center;
        }
        .div_one {
            width: 15%;
        }
        
        .div_two {
            width: 20%;
        }
        
        .div_three {
            width: 25.2%;
        }
        
        .div_four {
            width: 40.1%;
        }
        
        .div_five {
            width: 5%;
            font-size: 22.5px;
        }
        .tities{
            width: 90%;
            display: none;
            margin-top: 700px;
        }
        .default{
            /* display: none; */
        }
        .a{
            width: 100px;

        }
    </style>
    <script>
         function cric()
          {
            // if(ver == 3)
            //   {
            //      document.getElementById('santa').style.display = 'none';two_t
            //   }
            // ver = 2;
            // document.getElementById('default').style.display = 'none';
            // document.getElementById('tities').style.display = 'block';
window.location = "view_timetable.php";

          }
        function cric_c()
          {
            // if(ver == 2)
            //   {
            //      document.getElementById('tities').style.display = 'none';
            //   }
            // ver = 3;
            // document.getElementById('default').style.display = 'none';
            // document.getElementById('santa').style.display = 'block';
            // // document.getElementById('two_t').style.backgroundColor = '#eea369';
            window.location = "Set_selection.php";

          }  
    </script>
</head>

<body>


<?php 


 error_reporting(0);
// include('fet_set.php');





$servername = "localhost";
$username = "root";
$password = "";
$db="principal";

// Create connection
$con_pn = new mysqli($servername,$username,$password,$db);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";
 



$servername = "localhost";
$username = "root";
$password = "";
$db="coe_func";

// Create connection
$conn = new mysqli($servername,$username,$password,$db);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";
 
    $_SESSION['date'] = $date;




if ($_SERVER['REQUEST_METHOD'] == 'POST') {
// echo "post";

$date = $_POST['date'];

$fet_date = "SELECT * FROM timetable where dt = '$date'";

$fet_date_up = mysqli_query($conn,$fet_date);
?>




     <div class="body_of_login_page">
        <div class="simple_form_box">
            <div class="koyal">
                <!-- <i style="font-size: 50px; color: rgb(247, 154, 87);" class='bx bx-door-open'></i> -->
                <!-- <i style="font-size: 50px; color: rgb(0, 0, 0);" class='bx bx-log-out'></i> -->
            </div>
            <div class="box_button">
                <div class="button_commen two">
                    <h1 style="text-decoration: underline; color: #0a582a;">Principal Options</h1>
                </div>
                <div class="button_commen " id="two_t">
                    <button class="one" onclick="cric()">View Timetable</button>
                </div>
                <div class="button_commen" id="two">
                    <button class="one" onclick="cric_c()">Finalize set</button>
                </div>
            </div>
        </div>

    

   






        <div class="main-div">
            <div class="div-2">
                <div class="heading">
                    <h1
                        style="font-size: 35px; font-weight: lighter; font-family: Arial, Helvetica, sans-serif; text-decoration: underline;">
                        Set Selection</h1>
                         <a href="../login_signin/login.php">
                    <i style="font-size: 35px; color: rgb(0, 0, 0); position: absolute; right: 140; top: 50;"
                        class='bx bx-log-out'></i></a>
                </div>






         
                <div class="main content"
                    style="width: 100%; height: auto; justify-content: center; align-items: center; display: flex; flex-direction: column;">
                    <div class="date_slection"
                        style="width: 100%; height: auto; justify-content: center; align-items: center; display: flex; flex-direction: column;">






                        <form action="<?php echo $_SERVER["PHP_SELF"];?> " method="post" 
                            style="justify-content: center; align-items: center; display: flex; flex-direction: column;">

                            <div class="text-o" style="justify-content: center; align-items: center; display: flex;">

                                <p style="font-family: Arial, Helvetica, sans-serif; font-size: 20px;">Select Date :</p>
                                <?php  echo $_SESSION['date']; ?>
                                <input
                                    style="margin-left: 20px; width: 220px; height: 50px; text-align: center; background-color:rgb(201, 232, 232); border-radius: 20px; border:  1px solid black; font-size: 20px;"
                                    type="date" value="<?php echo $date;?>" name="date">

                            </div>
<input value="Proceed" type="submit" name="submit" class="one"
                                style="margin-top: 30px; width:150px; height: 40px; font-size: 20px; background-color: #ecae7f;" >

                            <!-- <button class="one"
                                style="margin-top: 30px; width:150px; height: 40px; font-size: 20px; background-color: #ecae7f;">Proceed</button> -->
                        </form>



<?php


if (mysqli_num_rows($fet_date_up) > 0) {


    for ($i=0; $i < mysqli_num_rows($fet_date_up); $i++) { 
        // code...
    
    while($fet_sets = mysqli_fetch_array($fet_date_up)){




?>







                        <div class="box-o"
                            style="width:100%; height: auto; padding-bottom: 40px; padding-top: 10px; margin-top: -20px; display: flex; flex-direction: column; justify-content: center; align-items: center;">
                            <div class="sets"
                                style="width: 80%; height: 60px; margin-top: 20px; margin-bottom: 20px; display: flex; flex-direction: row; justify-content: center; align-items: center; border: 1px solid black;">
                                <div class="course_name"
                                    style="width: 20%; height: 100%; text-align: center; border-right: 1px solid black; display: flex; justify-content: center; align-items: center;">
                                    <p style="font-size: 18px;"><?php  echo $fet_sets['coursecode']; ?>   </p>
                                </div>


                                <div class="course_name"
                                    style="width: 80%; height: 100%; text-align: center;  display: flex; justify-content: space-around; align-items: center; flex-direction: row;">

                                   

                                <?php 

                                 $code = $fet_sets['coursecode'];
$check_final_que = "SELECT setno from principal_que_pp where code = '$code' ";
$check_final_que_up = mysqli_query($con_pn,$check_final_que);

$fet_fnsetno = mysqli_fetch_array($check_final_que_up);

for ($i=1; $i <=5 ; $i++) { 
    // code...


if ($i == $fet_fnsetno[0]) {
    // code...
   ?> 
<a  href="select_quepp_princ.php?id=<?php echo $i; ?>&code=<?php echo $fet_sets['coursecode']; ?>&date=<?php echo $date; ?>" id="alpha1" class="a">
                                  
                                    <button  
                                        style="width:16.66%; height: 40px; background-color: #000000; border-radius: 0%; font-size: 16px;"
                                        onclick="fun(this.getAttribute('id'))"><?php echo $i; ?></button>
</a>
<?php 
}else{
                                ?>

<a  href="select_quepp_princ.php?id=<?php echo $i; ?>&code=<?php echo $fet_sets['coursecode']; ?>&date=<?php  echo $date; ?>" id="alpha1" class="a">
                                  
                                    <button  
                                        style="width:16.66%; height: 40px; background-color: #a7e1bf; border-radius: 0%; font-size: 16px;"
                                        onclick="fun(this.getAttribute('id'))"><?php echo $i; ?></button>
</a>

<?php 
}

}

?>


                                </div>




                            </div>
                        </div>
                    
                        

<?php 




      }  


    }
}


 }elseif ($_SERVER['REQUEST_METHOD'] == "GET") {

$date_get = $_GET['date'];

if ($date_get == null) {
    // code...
    /// only form
?>
     <div class="body_of_login_page">
        <div class="simple_form_box">
            <div class="koyal">
                <!-- <i style="font-size: 50px; color: rgb(247, 154, 87);" class='bx bx-door-open'></i> -->
                <!-- <i style="font-size: 50px; color: rgb(0, 0, 0);" class='bx bx-log-out'></i> -->
            </div>
            <div class="box_button">
                <div class="button_commen two">
                    <h1 style="text-decoration: underline; color: #0a582a;">Principal Options</h1>
                </div>
                <div class="button_commen " id="two_t">
                    <button class="one" onclick="cric()">View Timetable</button>
                </div>
                <div class="button_commen" id="two">
                    <button class="one" onclick="cric_c()">Finalize set</button>
                </div>
            </div>
        </div>


        <div class="main-div">
            <div class="div-2">
                <div class="heading">
                    <h1
                        style="font-size: 35px; font-weight: lighter; font-family: Arial, Helvetica, sans-serif; text-decoration: underline;">
                        Set Selection</h1>
                     <a href="../login_signin/login.php">
                    <i style="font-size: 35px; color: rgb(0, 0, 0); position: absolute; right: 120; top: 50;"
                        class='bx bx-log-out'></i></a>
                </div>
                <div class="main content"
                    style="width: 100%; height: auto; justify-content: center; align-items: center; display: flex; flex-direction: column;">
                    <div class="date_slection"
                        style="width: 100%; height: auto; justify-content: center; align-items: center; display: flex; flex-direction: column;">






                        <form action="<?php echo $_SERVER["PHP_SELF"];?> " method="post" 
                            style="justify-content: center; align-items: center; display: flex; flex-direction: column;">

                            <div class="text-o" style="justify-content: center; align-items: center; display: flex;">

                                <p style="font-family: Arial, Helvetica, sans-serif; font-size: 20px;">Select Date :</p>
                                <input
                                    style="margin-left: 20px; width: 220px; height: 50px; text-align: center; background-color:rgb(201, 232, 232); border-radius: 20px; border:  1px solid black; font-size: 20px;"
                                    type="date" name="date" value="<?php echo $date_get; ?>">

                                    
                                    <?php
                                    
                                    echo $_SESSION['date'];   
                                    // echo $_SESSION['code']; 

                                    ?>
                            </div>
<input value="Proceed" type="submit" name="submit" class="one"
                                style="margin-top: 30px; width:150px; height: 40px; font-size: 20px; background-color: #ecae7f;" >

                            <!-- <button class="one"
                                style="margin-top: 30px; width:150px; height: 40px; font-size: 20px; background-color: #ecae7f;">Proceed</button> -->
                        </form>
                        <?php 
//only form end
}else{
   // echo "no";




echo $_SESSION['date'];

$fet_date = "SELECT * FROM timetable where dt = '$date_get'";

$fet_date_up = mysqli_query($conn,$fet_date);
?>


     <div class="body_of_login_page">
        <div class="simple_form_box">
            <div class="koyal">
                <!-- <i style="font-size: 50px; color: rgb(247, 154, 87);" class='bx bx-door-open'></i> -->
                <!-- <i style="font-size: 50px; color: rgb(0, 0, 0);" class='bx bx-log-out'></i> -->
            </div>
            <div class="box_button">
                <div class="button_commen two">
                    <h1 style="text-decoration: underline; color: #0a582a;">Principal Options</h1>
                </div>
                <div class="button_commen " id="two_t">
                    <button class="one" onclick="cric()">View Timetable</button>
                </div>
                <div class="button_commen" id="two">
                    <button class="one" onclick="cric_c()">Finalize set</button>
                </div>
            </div>
        </div>


        <div class="main-div">
            <div class="div-2">
                <div class="heading">
                    <h1
                        style="font-size: 35px; font-weight: lighter; font-family: Arial, Helvetica, sans-serif; text-decoration: underline;">
                        Set Selection</h1>
                     <a href="../login_signin/login.php">
                    <i style="font-size: 35px; color: rgb(0, 0, 0); position: absolute; right: 120; top: 50;"
                        class='bx bx-log-out'></i></a>
                </div>
                <div class="main content"
                    style="width: 100%; height: auto; justify-content: center; align-items: center; display: flex; flex-direction: column;">
                    <div class="date_slection"
                        style="width: 100%; height: auto; justify-content: center; align-items: center; display: flex; flex-direction: column;">






                        <form action="<?php echo $_SERVER["PHP_SELF"];?> " method="post" 
                            style="justify-content: center; align-items: center; display: flex; flex-direction: column;">

                            <div class="text-o" style="justify-content: center; align-items: center; display: flex;">

                                <p style="font-family: Arial, Helvetica, sans-serif; font-size: 20px;">Select Date :</p>
                                <input
                                    style="margin-left: 20px; width: 220px; height: 50px; text-align: center; background-color:rgb(201, 232, 232); border-radius: 20px; border:  1px solid black; font-size: 20px;"
                                    type="date" name="date" value="<?php echo $date_get; ?>">

                                    
                                    <?php
                                    
                                    echo $_SESSION['date'];   
                                    // echo $_SESSION['code']; 

                                    ?>
                            </div>
<input value="Proceed" type="submit" name="submit" class="one"
                                style="margin-top: 30px; width:150px; height: 40px; font-size: 20px; background-color: #ecae7f;" >

                            <!-- <button class="one"
                                style="margin-top: 30px; width:150px; height: 40px; font-size: 20px; background-color: #ecae7f;">Proceed</button> -->
                        </form>

<?php 


if (mysqli_num_rows($fet_date_up) > 0) {


    for ($i=0; $i < mysqli_num_rows($fet_date_up); $i++) { 
        // code...
    
    while($fet_sets = mysqli_fetch_array($fet_date_up)){

?>

                        <div class="box-o"
                            style="width:100%; height: auto; padding-bottom: 40px; padding-top: 10px; margin-top: -20px; display: flex; flex-direction: column; justify-content: center; align-items: center;">
                            <div class="sets"
                                style="width: 80%; height: 60px; margin-top: 20px; margin-bottom: 20px; display: flex; flex-direction: row; justify-content: center; align-items: center; border: 1px solid black;">
                                <div class="course_name"
                                    style="width: 20%; height: 100%; text-align: center; border-right: 1px solid black; display: flex; justify-content: center; align-items: center;">
                                    <p style="font-size: 18px;"><?php  echo $fet_sets['coursecode']; ?>   </p>
                                </div>


                                <div class="course_name"
                                    style="width: 80%; height: 100%; text-align: center;  display: flex; justify-content: space-around; align-items: center; flex-direction: row;">

                                   

                                <?php 

                                 $code = $fet_sets['coursecode'];                      
$check_final_que = "SELECT setno from principal_que_pp where code = '$code' ";
$check_final_que_up = mysqli_query($con_pn,$check_final_que);

$fet_fnsetno = mysqli_fetch_array($check_final_que_up);

// echo $fet_fnsetno[0];
for ($i=1; $i <=5 ; $i++) { 
    // code...


if ($i == $fet_fnsetno[0]) {
    // code...
   


   ?> 
<a  href="select_quepp_princ.php?id=<?php echo $i; ?>&code=<?php echo $fet_sets['coursecode']; ?>&date=<?php  echo $date_get; ?>" id="alpha1" class="a">
                                  
                                    <button  
                                        style="width:16.66%; height: 40px; background-color: #000000; border-radius: 0%; font-size: 16px;"
                                        onclick="fun(this.getAttribute('id'))"><?php echo $i; ?></button>
</a>
<?php 
}else{

                                ?>

<a  href="select_quepp_princ.php?id=<?php echo $i; ?>&code=<?php echo $fet_sets['coursecode']; ?>&date=<?php  echo $date_get; ?>" id="alpha1" class="a">
                                  
                                    <button  
                                        style="width:16.66%; height: 40px; background-color: #a7e1bf; border-radius: 0%; font-size: 16px;"
                                        onclick="fun(this.getAttribute('id'))"><?php echo $i; ?></button>
</a>

<?php 
}

}

?>


                                </div>




                            </div>
                        </div>
                        

<?php 




      }  


    }
}




}
// session_destroy();


}elseif($_GET['date'] == 1){
    echo "fnelse";
 ?>


    <div class="body_of_login_page">
        <div class="simple_form_box">
            <div class="koyal">
                <!-- <i style="font-size: 50px; color: rgb(247, 154, 87);" class='bx bx-door-open'></i> -->
                <!-- <i style="font-size: 50px; color: rgb(0, 0, 0);" class='bx bx-log-out'></i> -->
            </div>
            <div class="box_button">
                <div class="button_commen two">
                    <h1 style="text-decoration: underline; color: #0a582a;">Principal Options</h1>
                </div>
                <div class="button_commen " id="two_t">
                    <button class="one" onclick="cric()">View Timetable</button>
                </div>
                <div class="button_commen" id="two">
                    <button class="one" onclick="cric_c()">Finalize set</button>
                </div>
            </div>
        </div>


        
        <div class="main-div">
            <div class="div-2">
                <div class="heading">
                    <h1
                        style="font-size: 35px; font-weight: lighter; font-family: Arial, Helvetica, sans-serif; text-decoration: underline;">
                        Set Selection</h1>
                    <a href="../login_signin/login.php">
                    <i style="font-size: 35px; color: rgb(0, 0, 0); position: absolute; right: 120; top: 50;"
                        class='bx bx-log-out'></i></a>
                </div>
                <div class="main content"
                    style="width: 100%; height: auto; justify-content: center; align-items: center; display: flex; flex-direction: column;">
                    <div class="date_slection"
                        style="width: 100%; height: auto; justify-content: center; align-items: center; display: flex; flex-direction: column;">






                        <form action="<?php echo $_SERVER["PHP_SELF"];?> " method="post" 
                            style="justify-content: center; align-items: center; display: flex; flex-direction: column;">

                            <div class="text-o" style="justify-content: center; align-items: center; display: flex;">

                                <p style="font-family: Arial, Helvetica, sans-serif; font-size: 20px;">Select Date :</p>
                                <input
                                    style="margin-left: 20px; width: 220px; height: 50px; text-align: center; background-color:rgb(201, 232, 232); border-radius: 20px; border:  1px solid black; font-size: 20px;"
                                    type="date" name="date">
                            </div>
<input value="Proceed" type="submit" name="submit" class="one"
                                style="margin-top: 30px; width:150px; height: 40px; font-size: 20px; background-color: #ecae7f;" >

                            <!-- <button class="one"
                                style="margin-top: 30px; width:150px; height: 40px; font-size: 20px; background-color: #ecae7f;">Proceed</button> -->
                        </form>










                    </div>

                
                </div>
            </div>
        </div>

    </div>


    <?php 
session_destroy();

}
     ?>
</body>

</html>