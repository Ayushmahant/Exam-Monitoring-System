<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <title>List Valuver</title>
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
            width: 76%;
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
            margin-top: 20px;
            text-align: center;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        }
        
        .anchore_links {
            color: black;
            text-decoration: none;
            font-size: 18px;
            transition: 0.5s;
            width: 100%;
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
        
        .info_box {
            width: 100%;
            height: 100%;
            overflow-y: scroll;
            align-items: center;
            display: flex;
            flex-direction: column;
            margin-top: 20px;
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
            width: 13.6%;
        }
        
        .div_two_new {
            width: 35%;
        }
        
        .div_three_new {
            width: 35.8%;
        }
        
        .div_four_new {
            width: 35%;
        }
        
        .div_five_new {
            width: 26.20%;
        }
        
        .form_collector_new {
            width: 100%;
            display: flex;
            width: 100%;
        }
        
        .div_one {
            width: 11.6%;
        }
        
        .div_two {
            width: 35.8%;
        }
        
        .div_three {
            width: 35%;
        }
        
        .div_four {
            width: 15%;
        }
        
        .div_five {
            width: 5%;
            font-size: 22.5px;
        }
        
        .div_six {
            width: 25%;
        }
        
        .div_aplha {
            text-align: center;
            background-color: aliceblue;
            display: flex;
            justify-content: center;
            align-items: center;
            border: 1px solid black;
            height: auto;
            text-align: center;
            display: flex;
            justify-content: center;
            min-height: 40px;
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
            <h1 class="coe_options">List Valuer</h2>


<?php 
 
                 include('Backend/list_valuer.php');


 ?>
                <br>



    

            <br>
            <div class="info_box">
                <div class="form_collector">
                    <div class="div_aplhanew div_one_new"> 
                        <p>Sr no</p>
                    </div>
                    <div class="div_aplhanew div_two_new">
                        <p>Name</p>
                    </div>
                    <div class="div_aplhanew div_three_new">
                        <p>Institute</p>
                    </div> 
                    <div class="div_aplhanew div_four_new">
                        <p>Course Code</p>
                    </div>
                    <div class="div_aplhanew div_five_new">
                        <p>Contact Number</p>
                    </div>
                            
                 </div>


 
                 <?php 


if ($numrows > 0) {
    // code...
  $i = 1;

  while ($fetch_dis = mysqli_fetch_array($fetchup)) {
    // code...
  

?>

<?php 

$code_ex = explode(",",$fetch_dis['coursecode']);
$code_str = implode(",",$code_ex);

 ?>

               
                
               
                
                    <div class="form_collector_new">
                        <div class="div_one_new com">
                            <p><?php echo $i; ?></p>
                        </div>
                        <div class="div_two_new com">
                            <p><?php echo $fetch_dis['name']; ?></p>
                        </div>
                        <div class="div_three_new com">
                            <p><?php echo $fetch_dis['institute']; ?></p>
                        </div>
                        <div class="div_four_new com">
                            <p><?php echo $code_str; ?></p>
                        </div>
                        <div class="div_five_new com">
                            <p><?php echo $fetch_dis['mobile']; ?></p>
                        </div>
              <!--   <div class="div_aplha div_five">
                            <i class='bx bxs-edit-alt'></i>

                        </div>
                        <div class="div_aplha div_five">
                            <i class='bx bxs-trash-alt'></i>

                        </div> -->

                    </div>


<?php 
$i++;
}
}


?>






               <!--      <div class="form_collector_new">
                        <div class="div_aplha div_one">
                            <p>1</p>
                        </div>
                        <div class="div_aplha div_two">
                            <p>Shreeharsh Shivpuje</p>
                        </div>
                        <div class="div_aplha div_three">
                            <p>Government polytechnic nagpur</p>
                        </div>
                        <div class="div_aplha div_four">
                            <p>CH101G</p>
                        </div>
                        <div class="div_aplha div_six">
                            <p>Chemistry</p>
                        </div>
                        <div class="div_aplha div_five">
                            <i class='bx bxs-edit-alt'></i>

                        </div>
                        <div class="div_aplha div_five">
                            <i class='bx bxs-trash-alt'></i>

                        </div>

                    </div>
                    <div class="form_collector_new">
                        <div class="div_aplha div_one">
                            <p>1</p>
                        </div>
                        <div class="div_aplha div_two">
                            <p>Shreeharsh Shivpuje</p>
                        </div>
                        <div class="div_aplha div_three">
                            <p>Government polytechnic nagpur</p>
                        </div>
                        <div class="div_aplha div_four">
                            <p>CH101G</p>
                        </div>
                        <div class="div_aplha div_six">
                            <p>Chemistry</p>
                        </div>
                        <div class="div_aplha div_five">
                            <i class='bx bxs-edit-alt'></i>

                        </div>
                        <div class="div_aplha div_five">
                            <i class='bx bxs-trash-alt'></i>

                        </div>

                    </div>
                    <div class="form_collector_new">
                        <div class="div_aplha div_one">
                            <p>1</p>
                        </div>
                        <div class="div_aplha div_two">
                            <p>Shreeharsh Shivpuje</p>
                        </div>
                        <div class="div_aplha div_three">
                            <p>Government polytechnic nagpur</p>
                        </div>
                        <div class="div_aplha div_four">
                            <p>CH101G</p>
                        </div>
                        <div class="div_aplha div_six">
                            <p>Chemistry</p>
                        </div>
                        <div class="div_aplha div_five">
                            <i class='bx bxs-edit-alt'></i>

                        </div>
                        <div class="div_aplha div_five">
                            <i class='bx bxs-trash-alt'></i>

                        </div>

                    </div>


                </div>
        </div>

 -->


    </div>
</body>

</html>