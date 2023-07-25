<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <title>Question Paper</title>
    <style>
        * {
            margin: 0%; 
            padding: 0%; 
        }
        
        body {
            overflow-x:hidden ;
            background-color: #301E67;
        }
         
        .body_of_login_page {
            width: 100%;
            display: flex;
            justify-content: center;
            height: auto;
        }
        
        .simple_form_box {
            margin-top: 4%;
            background-color: aliceblue;
            height: 80%;
            width: 64%;
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
        
        .coe_options {
            margin-top: -80px;
            text-align: center;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
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
            height: auto;
            align-items: center;
            display: flex;
            flex-direction: column;
            margin-top: 10px;
            margin-left: 20px;
        }
        
        .form_collector {
            display: flex;
            width: 100%;
            margin-left: -40px;
        }
        
        .div_aplhanew {
            text-align: center;
            background-color: aliceblue;
            display: flex;
            justify-content: center;
            align-items: center;
            border: 1px solid black;
            height: auto;
            padding-top: 5px;
            padding-bottom: 5px;
            font-weight: bold;
            text-align: center;
            display: flex;
            width: 40px;
            justify-content: center;
        }
        
        .div_one_new {
            /* width: 7%; */
        }
        
        .div_two_new {
            /* width: 7.1%; */
        }
        
        .div_three_new {
            /* width: 7%; */
        }
        
        .div_four_new {
            width: 80.5%;
            display: flex;
            text-align: left;
            justify-content: left;
        }
        
        .form_collector_new {
            display: flex;
            width: 100%;
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


            /* padding-bottom: 20%; */
            
        }
        .collage_name{
            width: 100%;
            text-align: center;
        }
        .sub-div1{
            display: flex;
            width: 100%;
            justify-content: space-between;
        }
        .class_one{
         margin-left: 20px;
         margin-top: 15px;
        font-size: 18px;
        }
        .class_two{
         margin-right: 20px;
         margin-top: 15px;
        font-size: 18px;

        }
        .sub-div2{
            width: 100%;
            margin-left: 20px;
            margin-top: -20px;
        }
        .sub-div3{
            width: 100%;
            margin-left: 20px;
            margin-top: -20px;  
        }
        .alpha-div{
            width: 100%;
            margin-top: 10px;
            margin-left: 20px;


        }
        .sub_alpha{
            width: 100%;
            display: flex;
            justify-content: space-between;
        }
        .min-2{
            display: flex;
        }
        .div_box{
            width: 100%;
            display: flex;
        }
        
        .instructions_one
        {
            text-align: left;
            margin-left: 40px;
        }

        .que_img {
            height: 250px;
             width: 250px;
             margin: 5px;

        }
    </style>
</head>

<body>

    <?php 
       
       include 'question/que_paper_fet.php';


     ?>
    <div class="body_of_login_page">
        <div class="simple_form_box">

            <div class="collage_name">
                <p style="font-size: 32px; margin-top: 5px; font-family: 'Times New Roman', Times, serif;" font-weight: bold;>GOVERNMENT POLYTECHNIC, SADAR, NAGPUR</p>
                <P style="font-size: 22px; margin-top: 2px;">(An Autonomous Institute of Government of Maharashtra)</P>
                <p style="font-size: 28px; margin-top: 5px; font-weight: bold;">TERM EXAMINATION</p>
                <p style="float: Right; font-size: 26px; margin-right: 30px; margin-top: -15px; font-weight: bold;">EVEN 2021</p>

                <div class="sub-div1">
                    <div class="class_one">
                       <p style="font-weight: bold;">COURSE NAME: <?php echo $sub_name_fet[1]; ?> &ensp; &ensp; &ensp;</p>
                    </div>
                    <div class="class_two">
                       <p style="font-weight: bold;">COURSE CODE:</p>
                       <p style="font-weight: bold;"><?php echo $code; ?></p>
                       <!-- <p style="font-weight: bold;">EC101G</p> -->
                    </div>
                </div>
                
                <div class="sub-div2">
                    <p style="font-weight: bold; float: left; font-size: 16px;"  >PROGRAMME : <?php echo $sub_name_fet[0]; ?></p><br><br>
                    <p style="font-weight: bold; float: left; font-size: 16px; margin-top: -9px;">TIME &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; 3 Hours</p>
                </div>
                <div class="sub-div3">
                    <p style="font-weight: bold; font-size: 18px; margin-right: 42px; float: right; margin-bottom: 0px;">MAXIMUM MARKS : 60</p>
                </div>
                <br>
                <br><br>
                <hr>
                <div class="alpha-div">
                    <div class="sub_alpha">
                        <div class="min-1">
                            <p style="text-decoration: underline; font-weight: bold; font-size: 18px;">INSTRUCTIONS</p>
                        </div>
                        <div class="min-2" style="margin-right: -74px;">
                            <p style="font-weight: bold; font-size: 18px; width: 300px;">ENROLLMENT NO :</p>
                            <div class="div_box">
                                    <div style="height: 20px; width: 20px; border: 1px solid black;"></div>
                                    <div style="height: 20px; width: 20px; border: 1px solid black;"></div>
                                    <div style="height: 20px; width: 20px; border: 1px solid black;"></div>
                                    <div style="height: 20px; width: 20px; border: 1px solid black;"></div>
                                    <div style="height: 20px; width: 20px; border: 1px solid black;"></div>
                                    <div style="height: 20px; width: 20px; border: 1px solid black;"></div>
                                    <div style="height: 20px; width: 20px; border: 1px solid black;"></div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="instructions_one">
                    <br>
                    <p style="font-size: 18px;">1) &ensp; All questions are compulsory.</p>
                    <p style="font-size: 18px;">2) &ensp; Illustrate your answers with neat sketches wherever necessary.</p>
                    <p style="font-size: 18px;">3) &ensp; Use of Non Programmable Electronic Pocket Calculators is permissible.</p>
                    <p style="font-size: 18px;">4) &ensp; Figure to the right indicate full marks.</p>
                    <p style="font-size: 18px;">5) &ensp; Assume suitable additional data if necessary.</p>
                    <p style="font-size: 18px;">6) &ensp; Mobile phones & other similar electronic gadgets are strictly prohibited inside examination hall .</p>
                </div>
                <hr>
                <br>
                <p style="font-weight: bold; font-size: 16px; float: right; margin-right: 50px;">MARKS</p>
            </div>

                <div class="info_box">
            


                    <div class="form_collector">
                        <div class="div_aplhanew div_one_new">
                            <p>Q.1</p>
                        </div>
            

                        <div class="div_aplhanew div_three_new">
                        </div>
                        <div class="div_aplhanew div_four_new">
                            <p style="margin-left: 10px;">Attempt ANY SIX</p>
                        </div>
                        <div class="div_aplhanew div_three_new">

                            <p style="font-weight: bold;">(12)</p>
                        </div>
                        <div class="div_aplhanew div_three_new">
                            <p style="font-weight: bold;"></p>
                        </div>
 

                     </div>

                     <?php  
                            $alpha = 'a';

                            for ($i=0; $i < 9 ; $i++) { 
                                // code...
                            // $alpha = 'a';
  //                           for( $i<='j'; $i++) {
  // echo $i, PHP_EOL;

// echo $i;

// echo "hi{$que_arr[$i]}";

                             //  echo  $i;
                             // echo $que_arr[$i];
                             // echo $code;

                      ?>

                     <div class="form_collector">
                        <div class="div_aplhanew div_one_new">
                            <p><?php echo fetlevel($que_arr[$i],$code); ?></p>
                        </div>
                        <div class="div_aplhanew div_three_new">
                            <p>
                                <?php  
                    
                                echo "{$alpha})",PHP_EOL;

                                   


                             ?> 
                                 
                             </p>
                        </div>
                        <div class="div_aplhanew div_four_new">
                            <p><?php echo fetque($que_arr[$i],$code,$img_arr); ?></p>
                        </div>
                        <div class="div_aplhanew div_three_new">
                            <p></p>
                        </div>

                        <div class="div_aplhanew div_three_new">
                            <p>


                
            <a href="Edit_question.php?qid=<?php echo fetid($que_arr[$i],$code); ?>&code=<?php echo $code;?>&set=<?php echo $setno; ?>&pid=<?php echo $id;?>">
                      
                              <i class='bx bxs-edit-alt'></i></a>
                            
                            </p>
                        </div>

                     </div>
<?php   
$alpha++;
}
// }


?>



                     
                     <br>
                     <div class="form_collector">
                        <div class="div_aplhanew div_one_new">
                            <p>Q. 2</p>
                        </div>
                        <div class="div_aplhanew div_three_new">
                        </div>
                        <div class="div_aplhanew div_four_new">
                            <p style="margin-left: 10px;">Attempt ANY THREE</p>
                        </div>
                        <div class="div_aplhanew div_three_new">
                            <p>(9)</p>
                        </div>
                        <div class="div_aplhanew div_three_new">
                            <p>
                            </p>
                        </div>
                        

                     </div>


<?php  

$alpha = 'a';
for ($i=10; $i < 15 ; $i++) { 
    // code...

 ?>


                     <div class="form_collector">
                        <div class="div_aplhanew div_one_new">
                            <p><?php echo fetlevel($que_arr[$i],$code); ?></p>
                        </div>
                        <div class="div_aplhanew div_three_new">
                            <p> <?php  
                    
                                echo "{$alpha})",PHP_EOL;

                                   


                             ?></p>
                        </div>
                        <div class="div_aplhanew div_four_new">
                            <p><?php echo fetque($que_arr[$i],$code,$img_arr); ?></p>
                        </div>
                        <div class="div_aplhanew div_three_new">
                            <p></p>
                        </div>

                        <div class="div_aplhanew div_three_new">
                            <p>
                                     
            <a href="Edit_question.php?qid=<?php echo fetid($que_arr[$i],$code); ?>&code=<?php echo $code;?>&set=<?php echo $setno; ?>&pid=<?php echo $id;?>">
                            <i class='bx bxs-edit-alt'></i></a>
                            </p>
                        </div>

                     </div>



<?php  
$alpha++;
}

?>


                     <br>
                     <div class="form_collector">
                        <div class="div_aplhanew div_one_new">
                            <p>Q. 3</p>
                        </div>
                        <div class="div_aplhanew div_three_new">
                        </div>
                        <div class="div_aplhanew div_four_new">
                            <p style="margin-left: 10px;">Attempt ANY THREE</p>
                        </div>
                        <div class="div_aplhanew div_three_new">
                            <p>(9)</p>
                        </div>
                        <div class="div_aplhanew div_three_new">
                            <p>
                            </p>
                        </div>
                        

                     </div>
<?php 

$alpha = 'a';
for ($i=15; $i < 20 ; $i++) { 
    // code...

 ?>


                     <div class="form_collector">
                        <div class="div_aplhanew div_one_new">
                            <p><?php echo fetlevel($que_arr[$i],$code); ?></p>
                        </div>
                        <div class="div_aplhanew div_three_new">
                            <p>        <?php 
                                                    echo "{$alpha})",PHP_EOL;
?></p>
                        </div>
                        <div class="div_aplhanew div_four_new">
                            <p><?php echo fetque($que_arr[$i],$code,$img_arr); ?></p>
                        </div>
                        <div class="div_aplhanew div_three_new">
                            <p></p>
                        </div>

                        <div class="div_aplhanew div_three_new">
                           <p>
      
            <a href="Edit_question.php?qid=<?php echo fetid($que_arr[$i],$code); ?>&code=<?php echo $code;?>&set=<?php echo $setno; ?>&pid=<?php echo $id;?>">                            <i class='bx bxs-edit-alt'></i></a>
                            </p>
                        </div>

                     </div>




<?php  
$alpha++;
}

?>



                     <br>
                     <div class="form_collector">
                        <div class="div_aplhanew div_one_new">
                            <p>Q. 4</p>
                        </div>
                        <div class="div_aplhanew div_three_new">
                        </div>
                        <div class="div_aplhanew div_four_new">
                            <p style="margin-left: 10px;">Attempt ANY THREE</p>
                        </div>
                        <div class="div_aplhanew div_three_new">
                            <p>(9)</p>
                        </div>
                        <div class="div_aplhanew div_three_new">
                            <p>
                            </p>
                        </div>
                        

                     </div>

<?php 

$alpha = 'a';
for ($i=20; $i < 25 ; $i++) { 
    // code...

 ?>


                     <div class="form_collector">
                        <div class="div_aplhanew div_one_new">
                            <p><?php echo fetlevel($que_arr[$i],$code); ?></p>
                        </div>
                        <div class="div_aplhanew div_three_new">
                            <p>
<?php                                            echo "{$alpha})",PHP_EOL;
?>
                            </p>
                        </div>
                        <div class="div_aplhanew div_four_new">
                            <p><?php echo fetque($que_arr[$i],$code,$img_arr); ?></p>
                        </div>
                        <div class="div_aplhanew div_three_new">
                            <p></p>
                        </div>

                        <div class="div_aplhanew div_three_new">
                           <p>
      
            <a href="Edit_question.php?qid=<?php echo fetid($que_arr[$i],$code); ?>&code=<?php echo $code;?>&set=<?php echo $setno; ?>&pid=<?php echo $id;?>">                            <i class='bx bxs-edit-alt'></i></a>
                            </p>
                        </div>

                     </div>

<?php  
$alpha++;
}

?>

                  
                     <br>


                     <div class="form_collector">
                        <div class="div_aplhanew div_one_new">
                            <p>Q. 5</p>
                        </div>
                        <div class="div_aplhanew div_three_new">
                        </div>
                        <div class="div_aplhanew div_four_new">
                            <p style="margin-left: 10px;">Attempt ANY THREE</p>
                        </div>
                        <div class="div_aplhanew div_three_new">
                            <p>(9)</p>
                        </div>
                        <div class="div_aplhanew div_three_new">
                            <p>
                            </p>
                        </div>
                        

                     </div>


<?php 

$alpha = 'a';
for ($i=25; $i < 30 ; $i++) { 
    // code...

 ?>

                     <div class="form_collector">
                        <div class="div_aplhanew div_one_new">
                            <p><?php echo fetlevel($que_arr[$i],$code); ?></p>
                        </div>
                        <div class="div_aplhanew div_three_new">
                            <p><?php    
                                echo "{$alpha})",PHP_EOL;
?></p>
                        </div>
                        <div class="div_aplhanew div_four_new">
                            <p><?php echo fetque($que_arr[$i],$code,$img_arr); ?></p>
                        </div>
                        <div class="div_aplhanew div_three_new">
                            <p></p>
                        </div>

                        <div class="div_aplhanew div_three_new">
                           <p>
      
            <a href="Edit_question.php?qid=<?php echo fetid($que_arr[$i],$code); ?>&code=<?php echo $code;?>&set=<?php echo $setno; ?>&pid=<?php echo $id;?>">                            <i class='bx bxs-edit-alt'></i></a>
                            </p>
                        </div>

                     </div>

<?php  
$alpha++;
}

?>








                     <br>
                     <div class="form_collector">
                        <div class="div_aplhanew div_one_new">
                            <p>Q. 6</p>
                        </div>
                        <div class="div_aplhanew div_three_new">
                        </div>
                        <div class="div_aplhanew div_four_new">
                            <p style="margin-left: 10px;">Attempt ANY TWO</p>
                        </div>
                        <div class="div_aplhanew div_three_new">
                            <p>(12s)</p>
                        </div>
                        <div class="div_aplhanew div_three_new">
                            <p>
                            </p>
                        </div>
                        

                     </div>
                     

<?php 

$alpha = 'a';
for ($i=30; $i < 33 ; $i++) { 
    // code...

 ?>


                     <div class="form_collector">
                        <div class="div_aplhanew div_one_new">
                            <p><?php echo fetlevel($que_arr[$i],$code); ?></p>
                        </div>
                        <div class="div_aplhanew div_three_new">
                             <p><?php                       echo "{$alpha})",PHP_EOL;
?></p>
                        </div>
                        <div class="div_aplhanew div_four_new">
                            <p><?php echo fetque($que_arr[$i],$code,$img_arr); ?></p>
                        </div>
                        <div class="div_aplhanew div_three_new">
                            <p></p>
                        </div>

                        <div class="div_aplhanew div_three_new">
                           <p>
      
            <a href="Edit_question.php?qid=<?php echo fetid($que_arr[$i],$code); ?>&code=<?php echo $code;?>&set=<?php echo $setno; ?>&pid=<?php echo $id;?>">                            <i class='bx bxs-edit-alt'></i></a>
                            </p>
                        </div>

                     </div>


<?php  
$alpha++;
}

?>







<!-- //******************************************************************************** -->

<div style="width:100%; height: auto;"> 

<?php 


    $img_arr_cn = count($img_arr);


for ($i=0; $i < $img_arr_cn ; $i++) { 
?>


            <div  style="width: 30%; float: left;">
<img class="que_img" src="../image/<?php echo $img_arr[$i]; ?>">
 <p style="margin-left:20px">
    Fig <?php echo $i+1; ?>
</p>
       </div>
    <?php 
}

    ?>

</div>







<!-- //********************************************************************* -->






   
    <p>
        <?php
// echo $img_arr[$i];

        ?> 

    </p>
<div>
    <br>
    <!-- <a href="pg_dw.php?&set=<?php echo $setno; ?>&pid=<?php echo $id;?>"> -->
<button class="add_question" >
<a href="Modarator.php">
      Save as PDF
  </a>
</button>
<!-- </a> -->



<?php

function pdf()
{




require 'pdfcrowd.php';

    // Program to display URL of current page.
    if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
        $link = "https";
    else $link = "http";
      
    // Here append the common URL characters.
    $link .= "://";
      
    // Append the host(domain name, ip) to the URL.
    $link .= $_SERVER['HTTP_HOST'];
      
    // Append the requested resource location to the URL
    $link .= $_SERVER['REQUEST_URI'];
      
    // Print the link
    echo $link;






$client = new \Pdfcrowd\HtmlToPdfClient("demo", "ce544b6ea52a5621fb9d55f8b542d14d");
$pdf = $client->convertUrl($link);
}
?>








</div>


</body>
</html>