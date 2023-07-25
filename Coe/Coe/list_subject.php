<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <title>List Subject</title>
    <style>
        * {
            margin: 0%;
            padding: 0%;
        }
         
        body {
            background-color: #301E67;
        }
        
        .body_of_login_page {
            width: 100%;
            display: flex;
            justify-content: center;
            height: 100%;
        }
        
        .simple_form_box {
            margin-top: 4%;
            background-color: aliceblue;
            height: auto;
            width: 76%;
            margin-left: 0%;
            justify-content: center;
            display: flex;
            flex-direction: column;
            padding: 25px;
            /* border: 1px solid black; */
            border-radius: 10px;
            overflow-y: scroll;
            overflow-x:hidden ;
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
        
        .one {
            margin-left: 5px;
        }
        
        .login-name {
            width: 100%;
            text-align: center;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        }
        /* .button{
            width: 180px;
            height: 42px;
            margin-top: 30px;
            border: none;
            color: white;
            transition: 0.5s;
            border-radius: 10px;
            font-weight: bold;
            font-size: 18px;
        } */
        
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
            background-color: aquamarine;
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
        
        .one {
            margin-left: 60px;
        }
        
        .two {
            margin-left: 40px;
        }
        
        .three {
            margin-left: 8px;
        }
        
        .four {
            margin-left: 10px;
        }
        
        .five {
            margin-left: 50px;
        }
        
        .button_one {
            width: 156px;
            height: 45px;
            margin-top: 10px;
            color: rgb(0, 0, 0);
            /* border: 1px solid black; */
            border: none;
            background-color: aquamarine;
            cursor: pointer;
            transition: 0.5s;
        }
        
        .button_one:hover {
            box-shadow: 10px 10px 5px lightblue;
            transition: 0.5s;
        }
        
        .submit {
            width: 100%;
            display: flex;
            justify-content: center;
            margin-left: 20px;
        }
        
        .button_submit {
            width: 180px;
            height: 35px;
            background-color: aquamarine;
            border-radius: 10px;
            border: none;
        }
        
        .button_one {
            width: 238px;
            height: 45px;
            margin-top: 10px;
            color: rgb(0, 0, 0);
            /* border: 1px solid black; */
            border: none;
            background-color: aquamarine;
            cursor: pointer;
            transition: 0.5s;
            margin-left: 10px;
            margin-right: 10px;
        }
        
        .coe_options {
            margin-top: -80px;
            text-align: center;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        }
        
        .nav_bar_back {
            width: 3%;
            background-color: black;
            height: 5%;
            margin-bottom: 730px;
            margin-left: -7px;
            border-radius: 50px;
            position: absolute;
            /* margin-left: -60%; */
            text-align: center;
            background-color: rgb(240, 248, 255);
            overflow: hidden;
            transition: 0.5s;
            font-size: medium;
        }
        
        .nav_bar_for_coe:hover {
            height: 90%;
            transition: 0.5s;
            width: 15%;
        }
        
        .coe_nav {
            color: rgb(0, 0, 0);
            font-size: 25px;
        }
        
        .nav_setting_class {
            transition: 0.5s;
            margin-top: 30px;
            margin-bottom: 5px;
            text-align: center;
            display: flex;
            align-items: center;
        }
        
        .nav_setting_class:hover {
            text-align: center;
            display: flex;
            align-items: center;
            background-color: aquamarine;
            transition: 0.5s;
        }
        
        .anchore_links {
            color: black;
            text-decoration: none;
            font-size: 18px;
            transition: 0.5s;
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
        
        .anchore_links:hover {
            font-size: 20px;
            text-decoration: underline;
            color: rgb(5, 69, 48);
            transition: 0.5s;
        }
        
        .footer_of_nav {
            margin-top: 30%;
        }
        
        .nav_buttons {
            width: 120px;
            height: 40px;
            background-color: aquamarine;
            border: none;
            margin-top: -40px;
        }
        
        .info_box {
            width: 100%;
            height: 50%;
            overflow-y: scroll;
            align-items: center;
            display: flex;
            flex-direction: column;
            margin-top: 40px;
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
            width: 100%;
            height: 40px;
            font-weight: bold;
            text-align: center;
            display: flex;
            justify-content: center;

        }
        
        .div_one_new {
            width: 13.3%;
        }
        
        .div_two_new {
            width: 18%;
        }
        
        .div_three_new {
            width: 23.5%;
        }
        
        .div_four_new {
            width: 45.8%;
        }
        
        .form_collector_new {
            display: flex;
            width: 100%;
        }
        
        .div_one {
            width: 14.4%;
        }
        
        .div_two {
            width: 19.4%;
        }
        
        .div_three {
            width: 25%;
        }
        
        .div_four {
            width: 40.1%;
        }
        
        .div_five {
            width: 4.4%;
            font-size: 22.5px;
        }
        
        .header_of_nav {
            display: flex;
            width: 100%;
            justify-content: center;
            align-items: center;
        }
        
        .header_of_nav {
            display: flex;
            width: 100%;
            justify-content: center;
            align-items: center;
        }
        
        .coe_nav {
            margin-left: 40px;
            margin-right: 40px;
            font-size: 29px;
        }
        
        .input_branch {
            width: 250px;
            height: 45px;
            margin-top: 10px;
            text-align: center;
            background-color: aquamarine;
            border-radius: 10px;
            border: none;
            color: rgb(0, 0, 0);
            font-size: 16px;
        }
        
        .branch_selection {
            width: 100%;
            justify-content: center;
            display: flex;
        }
        .com{
            border: 1px solid black;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height:40px;
            height: auto;
        }
    </style>
</head>

<body>
     <?php    
                    



if ($_SERVER['REQUEST_METHOD'] == "GET") {
                include('Backend/list_subject.php');

      ?>




    <div class="body_of_login_page">
        <div class="simple_form_box">

            <!-- Inputs of username and password -->
            <div class="nav_bar_back">
                 <a href="coe.php">
            <h1>
                <i class='bx bx-arrow-back' height="10%" width="10%"></i>
            </h1>
        </a>
            </div>
            <h1 class="coe_options">List Subject</h2><br>
                <div class="branch_selection">
                    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                    <input name="dept" type="text" placeholder="Select Branch" class="input_branch" list="users">
                                    <input type="submit" name="submit">

                    <datalist id="users">
                            <option value="Artifical Intelligence & Machine Learning">
                            <option value="Automobile Engineering">
                            <option value="Civil Engineering">
                            <option value="Computer Engineering">
                            <option value="Electrical Engineering">
                            <option value="Electronics & Telecommunication">
                            <option value="Information Technology">
                            <option value="Mechanical Engineering">
                            <option value="Mechatronics">
                            <option value="Metallurigical Engineering">
                            <option value="Mining & Mine Surveying">
                            <option value="Packaging Technology">
                            <option value="Textile Engineering">
                            <option value="Travel & Tourism">

                        </datalist>    
                </div>

            </form>
                <div class="info_box">
                    <div class="form_collector">
                        <div class="div_aplhanew div_one_new">
                            <p>Sr no</p>
                        </div>
                        <div class="div_aplhanew div_two_new">
                            <p>Semister</p>
                        </div>
                         <div class="div_aplhanew div_two_new">
                            <p>Department</p>
                        </div>
                        <div class="div_aplhanew div_three_new">
                            <p>Course Code</p>
                        </div>
                        <div class="div_aplhanew div_four_new">
                            <p>Course Name</p>
                        </div>
                    </div>
                

<?php 
if ($numrows > 0) {
    // code... 
  for ($i=1; $i < $numrows ; $i++) { 
      // code...
       $j=1;


  while ($fetch_dis = mysqli_fetch_array($fetchup)) {
    // code...
  

?>
              <div class="form_collector_new">
                        <div class="div_one_new com">
                            <p><?php echo $j; ?></p>
                        </div>
                        <div class="div_two_new com">
                            <p><?php echo $fetch_dis['sem']; ?></p>
                        </div>
                        <div class="div_two_new com">
                            <p><?php echo $fetch_dis['dept']; ?></p>
                        </div>
                        <div class="div_three_new com">
                            <p><?php echo $fetch_dis['coursecode']; ?></p>
                        </div>
                        <div class="div_four_new com X-UA-Compatible">
                            <p><?php echo $fetch_dis['coursename']; ?></p>
                        </div>
                        <!-- <div class="div_aplha div_five">
                            <i class='bx bxs-trash-alt'></i>
                        </div>
                        <div class="div_aplha div_five">
                            <i class='bx bxs-edit-alt'></i>
                        </div> -->
                    </div>
                   
<?php 
 $j++;
}
// $j++;
}

}

}elseif($_SERVER['REQUEST_METHOD'] == "POST"){
    $dept = $_POST['dept'];
?>
  <div class="body_of_login_page">
        <div class="simple_form_box">

            <!-- Inputs of username and password -->
            <div class="nav_bar_back">
                 <a href="coe.php">
            <h1>
                <i class='bx bx-arrow-back' height="10%" width="10%"></i>
            </h1>
        </a>
            </div>
            <h1 class="coe_options">List Subject</h2><br>
                <div class="branch_selection">
                    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                    <input name="dept" value="<?php echo $dept; ?>" type="text" placeholder="Select Branch" class="input_branch" list="users">
                                    <input type="submit" name="submit">

                    <datalist id="users">
                            <option value="
Artifical Intelligence & Machine Learning">
                            <option value="Automobile Engineering">
                            <option value="Civil Engineering">
                            <option value="Computer Engineering">
                            <option value="Electrical Engineering">
                            <option value="Electronics & Telecommunication">
                            <option value="Information Technology">
                            <option value="Mechanical Engineering">
                            <option value="Mechatronics">
                            <option value="Metallurigical Engineering">
                            <option value="Mining & Mine Surveying">
                            <option value="Packaging Technology">
                            <option value="Textile Engineering">
                            <option value="Travel & Tourism">

                        </datalist>    
                </div>

            </form>
                <div class="info_box">
                    <div class="form_collector">
                        <div class="div_aplhanew div_one_new">
                            <p>Sr no</p>
                        </div>
                        <div class="div_aplhanew div_two_new">
                            <p>Semister</p>
                        </div>
                         <div class="div_aplhanew div_two_new">
                            <p>Department</p>
                        </div>
                        <div class="div_aplhanew div_three_new">
                            <p>Course Code</p>
                        </div>
                        <div class="div_aplhanew div_four_new">
                            <p>Course Name</p>
                        </div>
                    </div>
   
 
<?php  

include('../../connection/coe_db_con.php');

  //$branch = $_POST['branch'];
  // $branch='Information technology';

  $fetch = "SELECT id,sem,coursecode,coursename,dept FROM subject where dept = '$dept' ";

  $fetchup = mysqli_query($conn,$fetch);


  $numrows = mysqli_num_rows($fetchup);






?>

<?php 
if ($numrows > 0) {
    // code... 
  for ($i=1; $i <= $numrows ; $i++) { 
      // code...
       $j=1;


  while ($fetch_dis = mysqli_fetch_array($fetchup)) {
    // code...
  

?>
              <div class="form_collector_new">
                        <div class="div_one_new com">
                            <p><?php echo $j; ?></p>
                        </div>
                        <div class="div_two_new com">
                            <p><?php echo $fetch_dis['sem']; ?></p>
                        </div>
                        <div class="div_two_new com">
                            <p><?php echo $fetch_dis['dept']; ?></p>
                        </div>
                        <div class="div_three_new com">
                            <p><?php echo $fetch_dis['coursecode']; ?></p>
                        </div>
                        <div class="div_four_new com X-UA-Compatible">
                            <p><?php echo $fetch_dis['coursename']; ?></p>
                        </div>
                        <!-- <div class="div_aplha div_five">
                            <i class='bx bxs-trash-alt'></i>
                        </div>
                        <div class="div_aplha div_five">
                            <i class='bx bxs-edit-alt'></i>
                        </div> -->
                    </div>
                   
<?php 
 $j++;
}
// $j++;
}

}

}else{

}




?>
                </div>
                
          
        </div>





    </div>
</body>

</html>