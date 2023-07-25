<html lang="en">

<head> 
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <title>Assign Moderator</title>
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
            height: 80%;
            width: 50%;
            margin-left: 0%;
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
        
        .one {
            margin-left: 5px;
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
            margin-top: 800px;
        }
        
        .info {
            font-size: 25px;
            margin-bottom: 50%;
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
            margin-left: 0px;
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
            align-items: center;
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
        
        .nav_bar_back {
            width: 3%;
            background-color: black;
            height: 5%;
            margin-bottom: 550px;
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
            height: auto;
            text-align: 
            ;
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
            height: 40px;
            font-weight: bold;
            text-align: center;
            display: flex;
            justify-content: center;
        }
        
        .div_one_new {
            width: 7%;
        }
        
        .div_two_new {
            width: 7.1%;
        }
        
        .div_three_new {
            width: 7%;
        }
        
        .div_four_new {
            width: 75.5%;
        }
        
        .form_collector_new {
            display: flex;
            width: 100%;
            height: 100%;
        }
        
        .div_one {
            width: 7.9%;
        }
        
        .div_two {
            width: 8.1%;
        }
        
        .div_three {
            width: 8%;
        }
        
        .div_four {
            width: 75.5%;
        }
        
        .div_five {
            width: 5%;
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
        .add_question {
            width: 250px;
            height: 45px;
            margin-top: 10px;
            text-align: center;
            background-color: aquamarine;
            border-radius: 10px;
            border: none;
            color: rgb(0, 0, 0);
            font-size: 16px;
            margin-left: 38%;
            /* padding-bottom: 20%; */
            
        }
        .avimg{
            padding-left: 10%;
            height:100%;
            width: 20%;
        }
        .form_box{
            margin-top: 120px;
        }

        .coe_options {
                        margin-top: -110px;
            text-align: center;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        }
    </style>
</head>

<body>
<?php 

?>

    <div class="body_of_login_page">
        <div class="simple_form_box">

            <!-- Inputs of username and password --> 
            <div class="nav_bar_back" style="margin-top: -65px; margin-left: -20px;">
                <h1>
                    <a href="coe.php">
                    <i class='bx bx-arrow-back' height="10%" width="10%" ></i></a>
                </h1>
            </div>
            <h1 class="coe_options">Assign Moderator</h2><br>
                <div class="branch_selection">
    
<?php
 

?>


 

<?php

include('../../connection/coe_db_con.php');
// include('question/question_bank_con.php');

$fet_sub = "SELECT * FROM subject";

$fet_sub_up = mysqli_query($conn,$fet_sub);

$fet_sub_row = mysqli_num_rows($fet_sub_up);



$fet_val = "SELECT * FROM moderator";

$fet_val_up = mysqli_query($conn,$fet_val);

$fet_val_row = mysqli_num_rows($fet_val_up);

 

?>

 

   

                        <!-- <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> -->
<form class="form_box" method="post" action="Backend/assign_mod.php">
 <label class="info" for="user_name">Course code:</label>

                        <input name="code" list="sub" class="box-input seven" placeholder="Add Course code"  pla><br><br>
                        
                        <label class="info" for="user_name">Moderator name:</label>

                        <input  list="valuers" class="box-input five" placeholder="Add Moderator name" name="name" pla><br><br>
                                                 <div class="width_box" style="width: 100%;display: flex; align-items: center; justify-content: center; margin-top: 80px;">

                             <button style="width: 230.5px;height: 45px;border-radius: 0%;border: none;background-color: aquamarine;
                         border-radius: 8px;
                         font-size: 17px;
            color: rgb(0, 0, 0);
            margin-left: 5px;
            cursor: pointer;
            margin-right: 5px;
">Submit</button>
                         </div>
                        


                            <?php   
if ($fet_sub_row > 0) {
    ?>
                            <datalist id="sub">
<?php 
    while ($fet = mysqli_fetch_array($fet_sub_up)) {

        ?>



                <option value="<?php echo $fet['coursecode'];echo ".({$fet['coursename']})"; ?>">
                </option>

          <?php 
      }?>
        </datalist>
        <?php   } ?>   




                            <?php 
if ($fet_val_row > 0) {
    ?>
                            <datalist id="valuers">
<?php 
    while ($fet = mysqli_fetch_array($fet_val_up)) {

        ?>



                <option value="<?php echo $fet['name']; ?>">
                </option>
          <?php }
          ?>
      </datalist>
          <?php 
          } ?>   
</form>
