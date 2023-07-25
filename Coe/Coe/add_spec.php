<?php 

session_start();
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <title>Specification Table</title>
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
            height: auto;
        }

        .simple_form_box {
            margin-top: 4%;
            background-color: aliceblue;
            height: auto;
            width: 80%;
            justify-content: center;
            display: flex;
            flex-direction: column;
            padding: 25px;
            /* border: 1px solid black; */
            border-radius: 10px;
        }
        .temp_class{
            margin: auto;
            margin-top: 4%;
            background-color: aliceblue;
            height: auto;
            width: 74%;
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
            margin-top: 40px;
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
            margin-top: 40px;
            text-align: center;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        }

        .nav_bar_for_coe {
            width: 5%;
            background-color: black;
            height: 5%;
            margin-top: 70px;
            margin-left: 0px;
            border-radius: 50px;
            position: absolute;
            margin-left: -50%;
            text-align: center;
            background-color: rgb(240, 248, 255);
            overflow: hidden;
            transition: 0.5s;
            padding-right: 0%;
        }

        .nav_bar_back {
            width: 3%;
            background-color: black;
            height: 3%;
            margin-top: 83px;
            margin-left: 0px;
            border-radius: 50px;
            position: absolute;
            margin-left: -58%;
            text-align: center;
            background-color: rgb(240, 248, 255);
            overflow: hidden;
            transition: 0.5s;
            font-size: small;
        }

        .coe_nav {
            margin-left: 8px;
            margin-right: 0px;
            margin-top: 10px;
            font-size: 29px;
        }

        .nav_bar_for_coe:hover {
            height: 80%;
            transition: 0.5s;
            width: 8%;
            background-color: rgb(240, 248, 255);
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

        .header_of_nav {
            display: flex;
            width: 90%;
            justify-content: center;
            align-items: center;
        }

        .Num_of_que {
            margin-top: 20px;
            width: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: aquamarine;
            height: 60px;
            border-radius: 20px;
            margin-left: 50px;

        }

        .num_numbers {
            margin-right: 30px;
        }

        .input_number {
            margin-right: 10px;
            width: 40px;
            height: 30px;
            text-align: center;
        }

        .new_element {
            width: 100%;
            display: flex;
            justify-content: space-between;
            align-self: center;
            border: 1px solid black;
        }

        .commen_class {
            display: flex;
            width: 250px;
            height: 40px;
            justify-content: center;
            align-items: center;
            margin-top: 10px;
            margin-bottom: 10px;
            
            /* margin-left: 10px; */
            /* margin-right: 0px; */

        }

        .unit_box {
            width: 50px;
            text-align: center;
        }

        .sub_que_que {
            margin-top: 30px;
            display: flex;
        }

        .question_sub {
            font-size: 18px;
            color: rgb(32, 105, 81);
            margin-top: 5px;
        }

        .input_number_new {
            margin-left: 20px;
            width: 40px;
            height: 30px;
            text-align: center;

        }

        .sunflower {
            height: 30px;
            width: 70px;
            margin-top: 10px;
            background-color: aquamarine;
            border-radius: 5px;
            border: none;
           transition: 0.5s;
        }
        .sunflower:hover{
           background-color: rgb(255, 255, 255);
           transition: 0.5s;
           border: 1px solid black;
        }

        .Speci{
            width: 100%;
            text-align: center;
            margin-top: -60px;
            transition: 0.5s;
            margin-left: 10px;

        }
        .Speci:hover{
            text-decoration: underline;
            transition: 0.5s;
        }
        .shegaon{
            width: 100%;
            justify-content: center;
            align-items: center;
            display: flex;
        }

        .class_input{
            text-align: center;
            height: 30px;
        }
        .marks{
            text-align: center;
            height: 30px;
        }
    </style>
    <script>
        var val = 0;
        function console_log() {

            const value_number_input = parseInt(document.getElementById(`que_2_${val}`).value);
            var real_value = 0;
            const user_que_input = document.getElementById('que').value;
            const int_val = parseInt(user_que_input);

            while(value_number_input > real_value) {
                real_value = ++real_value;

                // if(int_val == val)
                //   {
                //     break;
                //   }
                

                document.getElementById(`sub_que_que_${val}`).insertAdjacentHTML("afterend",
                    `
                             <div class="new_element">
                    <div class="commen_class unit-num">
                        <p class="unit_box">Unit no</p>
                        <input type="text" placeholder="Unit no" class="class_input" list="list_unit">
                    </div>
                    <div class="commen_class level-que">
                        <p class="unit_box">Leval</p>
                        <input type="text" placeholder="Leval" class="class_input" list="list_level">
                    </div>
                    <div class="commen_class marks_que">
                        <p class="unit_box">Marks</p>
                        <input type="text" placeholder="Marks" class="class_input" list="list_marks">
                    </div>
                </div>
                            `
                )
            }
            fun_que(); 
        };
        function fun_n() {
            const user_que_input_new = document.getElementById(`que_2_${val}`).value;
            const int_val_new = parseInt(user_que_input_new);
            // console.log(int_val_new);
            var valu = 0;
        }
        function fun_que() {
            const user_que_input = document.getElementById('que').value;
            const int_val = parseInt(user_que_input);

            if (int_val > val) {
                function add_code() {

                    val = ++val;

                    document.getElementById('submit_new').insertAdjacentHTML("beforebegin",
                        `<div class="sub_que_que" id="sub_que_que_${val}"><p class="question_sub">How many sub questions are there in question no ${val} </p><input type="text" class="input_number_new" id="que_2_${val}"></div><button class="sunflower"id="button_for_go" onclick="console_log()">Proceed</button> `
                    );

                }
                add_code();
            }
        }
    </script>
</head>

<body>
    <div class="body_of_login_page">
        <div class="simple_form_box">
            <div style="margin-top: -25px;" class="temp_class">

            <!-- Inputs of username and password -->
            

            <h1 style="margin-top: 10px;" class="coe_options">Specification Table</h2><br>
                <hr>
                

                <br>

             <datalist id="list_unit">
                    <option value="1">
                    <option value="2">
                    <option value="3">
                    <option value="4">
                    <option value="5">
                    <option value="6">
                </datalist>
                <datalist id="list_marks">
                    <option value="2">
                    <option value="3">
                    <option value="4">
                    <option value="6">
                </datalist>
                <datalist id="list_level">
                    <option value="A">
                    <option value="U">
                    <option value="R">
                </datalist>
                
 
<!-- -----------------------         Q1 --------------------------Q!          Q1---------------------- -->



                <form method="post" action="Backend/st_tb_bk.php">
                <div style="width: 100%; display: flex; justify-content: center;" class="summery_que">
                    <p style="border-radius: 10px; border: none; width: 120px; height: 45px; display: flex; align-items: center; justify-content: center; background-color: #7ff0f0; text-align: center; font-size: 22px; margin-bottom: 10px; margin-top: 20px;">Q. 1</p>
              </div>


                                                   <!-- A = -->

                <div class="new_element">
                    <div style=" display: flex; justify-content: center; align-items: center; width: 40px; height: 60px; border-right: 1px solid black;" class="box_one0">
                        <p style="font-size: 19px;">a)</p>
                    </div>
                    <div class="commen_class unit-num">
                        <p class="unit_box">Unit no</p>
                        <input type="text" name="unit1" placeholder="Unit no" class="class_input" list="list_unit">
                    </div>
                    <div class="commen_class level-que">
                        <p class="unit_box">Level</p>
                        <input type="text" name="level1" placeholder="Level" class="class_input" list="list_level">
                    </div>
                    <div class="commen_class marks_que">
                        <p class="unit_box">Marks</p>
                        <input type="text" name="mark1" placeholder="Marks" class="class_input" list="list_marks">
                    </div>
                </div>



                            <!-- B -->


              
                <div class="new_element">
                    <div style=" display: flex; justify-content: center; align-items: center; width: 40px; height: 60px; border-right: 1px solid black;" class="box_one0">
                        <p style="font-size: 19px;">b)</p>
                    </div>
                    <div class="commen_class unit-num">
                        <p class="unit_box">Unit no</p>
                        <input type="text" name="unit2" placeholder="Unit no" class="class_input" list="list_unit">
                    </div>
                    <div class="commen_class level-que">
                        <p class="unit_box">Level</p>
                        <input type="text" name="level2" placeholder="Level" class="class_input" list="list_level">
                    </div>
                    <div class="commen_class marks_que">
                        <p class="unit_box">Marks</p>
                        <input type="text" name="mark2" placeholder="Marks" class="class_input" list="list_marks">
                    </div>
                </div>





                                                    <!-- c -->





              
                <div class="new_element">
                    <div style=" display: flex; justify-content: center; align-items: center; width: 40px; height: 60px; border-right: 1px solid black;" class="box_one0">
                        <p style="font-size: 19px;">c)</p>
                    </div>
                    <div class="commen_class unit-num">
                        <p class="unit_box">Unit no</p>
                        <input type="text" name="unit3" placeholder="Unit no" class="class_input" list="list_unit">
                    </div>
                    <div class="commen_class level-que">
                        <p class="unit_box">Level</p>
                        <input type="text" name="level3" placeholder="Level" class="class_input" list="list_level">
                    </div>
                    <div class="commen_class marks_que">
                        <p class="unit_box">Marks</p>
                        <input type="text" name="mark3" placeholder="Marks" class="class_input" list="list_marks">
                    </div>
                </div>



                                <!-- D -->



              
                <div class="new_element">
                    <div style=" display: flex; justify-content: center; align-items: center; width: 40px; height: 60px; border-right: 1px solid black;" class="box_one0">
                        <p style="font-size: 19px;">d)</p>
                    </div>
                    <div class="commen_class unit-num">
                        <p class="unit_box">Unit no</p>
                        <input type="text" name="unit4" placeholder="Unit no" class="class_input" list="list_unit">
                    </div>
                    <div class="commen_class level-que">
                        <p class="unit_box">Level</p>
                        <input type="text" name="level4" placeholder="Level" class="class_input" list="list_level">
                    </div>
                    <div class="commen_class marks_que">
                        <p class="unit_box">Marks</p>
                        <input type="text" name="mark4" placeholder="Marks" class="class_input" list="list_marks">
                    </div>
                </div>



                         <!-- E -->


              
                <div class="new_element">
                    <div style=" display: flex; justify-content: center; align-items: center; width: 40px; height: 60px; border-right: 1px solid black;" class="box_one0">
                        <p style="font-size: 19px;">e)</p>
                    </div>
                    <div class="commen_class unit-num">
                        <p class="unit_box">Unit no</p>
                        <input type="text" name="unit5" placeholder="Unit no" class="class_input" list="list_unit">
                    </div>
                    <div class="commen_class level-que">
                        <p class="unit_box">Level</p>
                        <input type="text" name="level5" placeholder="Level" class="class_input" list="list_level">
                    </div>
                    <div class="commen_class marks_que">
                        <p class="unit_box">Marks</p>
                        <input type="text" name="mark5" placeholder="Marks" class="class_input" list="list_marks">
                    </div>
                </div>

                <!-- F -->



              
                <div class="new_element">
                    <div style=" display: flex; justify-content: center; align-items: center; width: 40px; height: 60px; border-right: 1px solid black;" class="box_one0">
                        <p style="font-size: 19px;">f)</p>
                    </div>
                    <div class="commen_class unit-num">
                        <p class="unit_box">Unit no</p>
                        <input type="text" name="unit6" placeholder="Unit no" class="class_input" list="list_unit">
                    </div>
                    <div class="commen_class level-que">
                        <p class="unit_box">Level</p>
                        <input type="text" name="level6" placeholder="Level" class="class_input" list="list_level">
                    </div>
                    <div class="commen_class marks_que">
                        <p class="unit_box">Marks</p>
                        <input type="text" name="mark6" placeholder="Marks" class="class_input" list="list_marks">
                    </div>
                </div>




                <!-- G -->


              
                <div class="new_element">
                    <div style=" display: flex; justify-content: center; align-items: center; width: 40px; height: 60px; border-right: 1px solid black;" class="box_one0">
                        <p style="font-size: 19px;">g)</p>
                    </div>
                    <div class="commen_class unit-num">
                        <p class="unit_box">Unit no</p>
                        <input type="text" name="unit7" placeholder="Unit no" class="class_input" list="list_unit">
                    </div>
                    <div class="commen_class level-que">
                        <p class="unit_box">Level</p>
                        <input type="text" name="level7" placeholder="Level" class="class_input" list="list_level">
                    </div>
                    <div class="commen_class marks_que">
                        <p class="unit_box">Marks</p>
                        <input type="text" name="mark7" placeholder="Marks" class="class_input" list="list_marks">
                    </div>
                </div>


<!-- H -->






              
                <div class="new_element">
                    <div style=" display: flex; justify-content: center; align-items: center; width: 40px; height: 60px; border-right: 1px solid black;" class="box_one0">
                        <p style="font-size: 19px;">h)</p>
                    </div>
                    <div class="commen_class unit-num">
                        <p class="unit_box">Unit no</p>
                        <input type="text" name="unit8" placeholder="Unit no" class="class_input" list="list_unit">
                    </div>
                    <div class="commen_class level-que">
                        <p class="unit_box">Level</p>
                        <input type="text" name="level8" placeholder="Level" class="class_input" list="list_level">
                    </div>
                    <div class="commen_class marks_que">
                        <p class="unit_box">Marks</p>
                        <input type="text" name="mark8" placeholder="Marks" class="class_input" list="list_marks">
                    </div>
                </div>




<!-- I -->





              
                <div class="new_element">
                    <div style=" display: flex; justify-content: center; align-items: center; width: 40px; height: 60px; border-right: 1px solid black;" class="box_one0">
                        <p style="font-size: 19px;">i)</p>
                    </div>
                    <div class="commen_class unit-num">
                        <p class="unit_box">Unit no</p>
                        <input type="text" name="unit9" placeholder="Unit no" class="class_input" list="list_unit">
                    </div>
                    <div class="commen_class level-que">
                        <p class="unit_box">Level</p>
                        <input type="text" name="level9" placeholder="Level" class="class_input" list="list_level">
                    </div>
                    <div class="commen_class marks_que">
                        <p class="unit_box">Marks</p>
                        <input type="text" name="mark9" placeholder="Marks" class="class_input" list="list_marks">
                    </div>
                </div>



  <!--  -------------------------         Q2                Q2           Q2              Q2 -->






















                <br>
                <br>
                <hr>
                <div style="width: 100%; display: flex; justify-content: center;" class="summery_que">
                    <p style=" border-radius: 10px; border: none; width: 120px; height: 45px; display: flex; align-items: center; justify-content: center; background-color: #7ff0f0; text-align: center; font-size: 22px; margin-bottom: 10px; margin-top: 20px;">Q. 2</p>
              </div>

<!-- a -->

              <div class="new_element">
                <div style=" display: flex; justify-content: center; align-items: center; width: 40px; height: 60px; border-right: 1px solid black;" class="box_one0">
                    <p style="font-size: 19px;">a)</p>
                </div>
                <div class="commen_class unit-num">
                    <p class="unit_box">Unit no</p>
                    <input type="text" name="unit10" placeholder="Unit no" class="class_input" list="list_unit">
                </div>
                <div class="commen_class level-que">
                    <p class="unit_box">Level</p>
                    <input type="text" name="level10" placeholder="Level" class="class_input" list="list_level">
                </div>
                <div class="commen_class marks_que">
                    <p class="unit_box">Marks</p>
                    <input type="text" name="mark10" placeholder="Marks" class="class_input" list="list_marks">
                </div>
            </div>


            <!-- b -->

              <div class="new_element">
                <div style=" display: flex; justify-content: center; align-items: center; width: 40px; height: 60px; border-right: 1px solid black;" class="box_one0">
                    <p style="font-size: 19px;">b)</p>
                </div>
                <div class="commen_class unit-num">
                    <p class="unit_box">Unit no</p>
                    <input type="text" name="unit11" placeholder="Unit no" class="class_input" list="list_unit">
                </div>
                <div class="commen_class level-que">
                    <p class="unit_box">Level</p>
                    <input type="text" name="level11" placeholder="Level" class="class_input" list="list_level">
                </div>
                <div class="commen_class marks_que">
                    <p class="unit_box">Marks</p>
                    <input type="text" name="mark11" placeholder="Marks" class="class_input" list="list_marks">
                </div>
            </div>


<!-- c -->



              <div class="new_element">
                <div style=" display: flex; justify-content: center; align-items: center; width: 40px; height: 60px; border-right: 1px solid black;" class="box_one0">
                    <p style="font-size: 19px;">c)</p>
                </div>
                <div class="commen_class unit-num">
                    <p class="unit_box">Unit no</p>
                    <input type="text" name="unit12" placeholder="Unit no" class="class_input" list="list_unit">
                </div>
                <div class="commen_class level-que">
                    <p class="unit_box">Level</p>
                    <input type="text" name="level12" placeholder="Leval" class="class_input" list="list_level">
                </div>
                <div class="commen_class marks_que">
                    <p class="unit_box">Marks</p>
                    <input type="text" name="mark12" placeholder="Marks" class="class_input" list="list_marks">
                </div>
            </div>



<!-- d -->


              <div class="new_element">
                <div style=" display: flex; justify-content: center; align-items: center; width: 40px; height: 60px; border-right: 1px solid black;" class="box_one0">
                    <p style="font-size: 19px;">d)</p>
                </div>
                <div class="commen_class unit-num">
                    <p class="unit_box">Unit no</p>
                    <input type="text" name="unit13" placeholder="Unit no" class="class_input" list="list_unit">
                </div>
                <div class="commen_class level-que">
                    <p class="unit_box">Level</p>
                    <input type="text" name="level13" placeholder="Level" class="class_input" list="list_level">
                </div>
                <div class="commen_class marks_que">
                    <p class="unit_box">Marks</p>
                    <input type="text" name="mark13" placeholder="Marks" class="class_input" list="list_marks">
                </div>
            </div>


<!-- e -->


              <div class="new_element">
                <div style=" display: flex; justify-content: center; align-items: center; width: 40px; height: 60px; border-right: 1px solid black;" class="box_one0">
                    <p style="font-size: 19px;">e)</p>
                </div>
                <div class="commen_class unit-num">
                    <p class="unit_box">Unit no</p>
                    <input type="text" name="unit14" placeholder="Unit no" class="class_input" list="list_unit">
                </div>
                <div class="commen_class level-que">
                    <p class="unit_box">Level</p>
                    <input type="text" name="level14" placeholder="Level" class="class_input" list="list_level">
                </div>
                <div class="commen_class marks_que">
                    <p class="unit_box">Marks</p>
                    <input type="text" name="mark14" placeholder="Marks" class="class_input" list="list_marks">
                </div>
            </div>






<!-- Q3  ------------------------------ Q3 -->






            <br>
            <br>
            <hr>
            <div style="width: 100%; display: flex; justify-content: center;" class="summery_que">
                <p style=" border-radius: 10px; border: none; width: 120px; height: 45px; display: flex; align-items: center; justify-content: center; background-color: #7ff0f0; text-align: center; font-size: 22px; margin-bottom: 10px; margin-top: 20px;">Q. 3</p>
          </div>


<!-- a -->

          <div class="new_element">
            <div style=" display: flex; justify-content: center; align-items: center; width: 40px; height: 60px; border-right: 1px solid black;" class="box_one0">
                <p style="font-size: 19px;">a)</p>
            </div>

            <div class="commen_class unit-num">
                <p class="unit_box">Unit no</p>
                <input type="text" name="unit15" placeholder="Unit no" class="class_input" list="list_unit">
            </div>
            <div class="commen_class level-que">
                <p class="unit_box">Level</p>
                <input type="text" name="level15" placeholder="Level" class="class_input" list="list_level">
            </div>
            <div class="commen_class marks_que">
                <p class="unit_box">Marks</p>
                <input type="text" name="mark15" placeholder="Marks" class="class_input" list="list_marks">
            </div>
        </div>


      <!-- b      -->

          <div class="new_element">
            <div style=" display: flex; justify-content: center; align-items: center; width: 40px; height: 60px; border-right: 1px solid black;" class="box_one0">
                <p style="font-size: 19px;">b)</p>
            </div>

            <div class="commen_class unit-num">
                <p class="unit_box">Unit no</p>
                <input type="text" name="unit16" placeholder="Unit no" class="class_input" list="list_unit">
            </div>
            <div class="commen_class level-que">
                <p class="unit_box">Level</p>
                <input type="text" name="level16" placeholder="Level" class="class_input" list="list_level">
            </div>
            <div class="commen_class marks_que">
                <p class="unit_box">Marks</p>
                <input type="text" name="mark16" placeholder="Marks" class="class_input" list="list_marks">
            </div>
        </div>


<!-- c -->



          <div class="new_element">
            <div style=" display: flex; justify-content: center; align-items: center; width: 40px; height: 60px; border-right: 1px solid black;" class="box_one0">
                <p style="font-size: 19px;">c)</p>
            </div>

            <div class="commen_class unit-num">
                <p class="unit_box">Unit no</p>
                <input type="text" name="unit17" placeholder="Unit no" class="class_input" list="list_unit">
            </div>
            <div class="commen_class level-que">
                <p class="unit_box">Level</p>
                <input type="text" name="level17" placeholder="Level" class="class_input" list="list_level">
            </div>
            <div class="commen_class marks_que">
                <p class="unit_box">Marks</p>
                <input type="text" name="mark17" placeholder="Marks" class="class_input" list="list_marks">
            </div>
        </div>


<!-- d -->

          <div class="new_element">
            <div style=" display: flex; justify-content: center; align-items: center; width: 40px; height: 60px; border-right: 1px solid black;" class="box_one0">
                <p style="font-size: 19px;">d)</p>
            </div>

            <div class="commen_class unit-num">
                <p class="unit_box">Unit no</p>
                <input type="text" name="unit18" placeholder="Unit no" class="class_input" list="list_unit">
            </div>
            <div class="commen_class level-que">
                <p class="unit_box">Level</p>
                <input type="text" name="level18" placeholder="Level" class="class_input" list="list_level">
            </div>
            <div class="commen_class marks_que">
                <p class="unit_box">Marks</p>
                <input type="text" name="mark18" placeholder="Marks" class="class_input" list="list_marks">
            </div>
        </div>

<!-- e -->


          <div class="new_element">
            <div style=" display: flex; justify-content: center; align-items: center; width: 40px; height: 60px; border-right: 1px solid black;" class="box_one0">
                <p style="font-size: 19px;">e)</p>
            </div>

            <div class="commen_class unit-num">
                <p class="unit_box">Unit no</p>
                <input type="text" name="unit19" placeholder="Unit no" class="class_input" list="list_unit">
            </div>
            <div class="commen_class level-que">
                <p class="unit_box">Level</p>
                <input type="text" name="level19" placeholder="Level" class="class_input" list="list_level">
            </div>
            <div class="commen_class marks_que">
                <p class="unit_box">Marks</p>
                <input type="text" name="mark19" placeholder="Marks" class="class_input" list="list_marks">
            </div>
        </div>

<!-- Q4      ----------------------------------------------------            Q4 -->




    <br>
    <br>
    <hr>
    <div style="width: 100%; display: flex; justify-content: center;" class="summery_que">
        <p style=" border-radius: 10px; border: none; width: 120px; height: 45px; display: flex; align-items: center; justify-content: center; background-color: #7ff0f0; text-align: center; font-size: 22px; margin-bottom: 10px; margin-top: 20px;">Q. 4</p>
  </div>

  <!-- a -->

  <div class="new_element">
    <div style=" display: flex; justify-content: center; align-items: center; width: 40px; height: 60px; border-right: 1px solid black;" class="box_one0">
        <p style="font-size: 19px;">a)</p>
    </div>
    <div class="commen_class unit-num">
        <p class="unit_box">Unit no</p>
        <input type="text" name="unit20" placeholder="Unit no" class="class_input" list="list_unit">
    </div>
    <div class="commen_class level-que">
        <p class="unit_box">Level</p>
        <input type="text" name="level20" placeholder="Level" class="class_input" list="list_level">
    </div>
    <div class="commen_class marks_que">
        <p class="unit_box">Marks</p>
        <input type="text" name="mark20" placeholder="Marks" class="class_input" list="list_marks">
    </div>
</div>
<!-- b -->

<div class="new_element">
    <div style=" display: flex; justify-content: center; align-items: center; width: 40px; height: 60px; border-right: 1px solid black;" class="box_one0">
        <p style="font-size: 19px;">b)</p>
    </div>
    <div class="commen_class unit-num">
        <p class="unit_box">Unit no</p>
        <input type="text" name="unit21" placeholder="Unit no" class="class_input" list="list_unit">
    </div>
    <div class="commen_class level-que">
        <p class="unit_box">Level</p>
        <input type="text" name="level21" placeholder="Level" class="class_input" list="list_level">
    </div>
    <div class="commen_class marks_que">
        <p class="unit_box">Marks</p>
        <input type="text" name="mark21" placeholder="Marks" class="class_input" list="list_marks">
    </div>
</div>


<!-- c -->

<div class="new_element">
    <div style=" display: flex; justify-content: center; align-items: center; width: 40px; height: 60px; border-right: 1px solid black;" class="box_one0">
        <p style="font-size: 19px;">c)</p>
    </div>
    <div class="commen_class unit-num">
        <p class="unit_box">Unit no</p>
        <input type="text" name="unit22" placeholder="Unit no" class="class_input" list="list_unit">
    </div>
    <div class="commen_class level-que">
        <p class="unit_box">Level</p>
        <input type="text" name="level22" placeholder="Level" class="class_input" list="list_level">
    </div>
    <div class="commen_class marks_que">
        <p class="unit_box">Marks</p>
        <input type="text" name="mark22" placeholder="Marks" class="class_input" list="list_marks">
    </div>
</div>


<!-- d -->

<div class="new_element">
    <div style=" display: flex; justify-content: center; align-items: center; width: 40px; height: 60px; border-right: 1px solid black;" class="box_one0">
        <p style="font-size: 19px;">d)</p>
    </div>
    <div class="commen_class unit-num">
        <p class="unit_box">Unit no</p>
        <input type="text" name="unit23" placeholder="Unit no" class="class_input" list="list_unit">
    </div>
    <div class="commen_class level-que">
        <p class="unit_box">Level</p>
        <input type="text" name="level23" placeholder="Level" class="class_input" list="list_level">
    </div>
    <div class="commen_class marks_que">
        <p class="unit_box">Marks</p>
        <input type="text" name="mark23" placeholder="Marks" class="class_input" list="list_marks">
    </div>
</div>

<!-- e -->


<div class="new_element">
    <div style=" display: flex; justify-content: center; align-items: center; width: 40px; height: 60px; border-right: 1px solid black;" class="box_one0">
        <p style="font-size: 19px;">e)</p>
    </div>
    <div class="commen_class unit-num">
        <p class="unit_box">Unit no</p>
        <input type="text" name="unit24" placeholder="Unit no" class="class_input" list="list_unit">
    </div>
    <div class="commen_class level-que">
        <p class="unit_box">Level</p>
        <input type="text" name="level24" placeholder="Level" class="class_input" list="list_level">
    </div>
    <div class="commen_class marks_que">
        <p class="unit_box">Marks</p>
        <input type="text" name="mark24" placeholder="Marks" class="class_input" list="list_marks">
    </div>
</div>







<!-- Q5     --------------------------------------------                Q5 -->




    <br>
    <br>
    <hr>
    <div style="width: 100%; display: flex; justify-content: center;" class="summery_que">
        <p style=" border-radius: 10px; border: none; width: 120px; height: 45px; display: flex; align-items: center; justify-content: center; background-color: #7ff0f0; text-align: center; font-size: 22px; margin-bottom: 10px; margin-top: 20px;">Q. 5</p>
  </div>

  <!-- a -->

  <div class="new_element">
    <div style=" display: flex; justify-content: center; align-items: center; width: 40px; height: 60px; border-right: 1px solid black;" class="box_one0">
        <p style="font-size: 19px;">a)</p>
    </div>
    <div class="commen_class unit-num">
        <p class="unit_box">Unit no</p>
        <input type="text" name="unit25" placeholder="Unit no" class="class_input" list="list_unit">
    </div>
    <div class="commen_class level-que">
        <p class="unit_box">Level</p>
        <input type="text" name="level25" placeholder="Level" class="class_input" list="list_level">
    </div>
    <div class="commen_class marks_que">
        <p class="unit_box">Marks</p>
        <input type="text" name="mark25" placeholder="Marks" class="class_input" list="list_marks">
    </div>
</div>
<!-- b -->

<div class="new_element">
    <div style=" display: flex; justify-content: center; align-items: center; width: 40px; height: 60px; border-right: 1px solid black;" class="box_one0">
        <p style="font-size: 19px;">b)</p>
    </div>
    <div class="commen_class unit-num">
        <p class="unit_box">Unit no</p>
        <input type="text" name="unit26" placeholder="Unit no" class="class_input" list="list_unit">
    </div>
    <div class="commen_class level-que">
        <p class="unit_box">Level</p>
        <input type="text" name="level26" placeholder="Level" class="class_input" list="list_level">
    </div>
    <div class="commen_class marks_que">
        <p class="unit_box">Marks</p>
        <input type="text" name="mark26" placeholder="Marks" class="class_input" list="list_marks">
    </div>
</div>


<!-- c -->

<div class="new_element">
    <div style=" display: flex; justify-content: center; align-items: center; width: 40px; height: 60px; border-right: 1px solid black;" class="box_one0">
        <p style="font-size: 19px;">c)</p>
    </div>
    <div class="commen_class unit-num">
        <p class="unit_box">Unit no</p>
        <input type="text" name="unit27" placeholder="Unit no" class="class_input" list="list_unit">
    </div>
    <div class="commen_class level-que">
        <p class="unit_box">Level</p>
        <input type="text" name="level27" placeholder="Level" class="class_input" list="list_level">
    </div>
    <div class="commen_class marks_que">
        <p class="unit_box">Marks</p>
        <input type="text" name="mark27" placeholder="Marks" class="class_input" list="list_marks">
    </div>
</div>


<!-- d -->

<div class="new_element">
    <div style=" display: flex; justify-content: center; align-items: center; width: 40px; height: 60px; border-right: 1px solid black;" class="box_one0">
        <p style="font-size: 19px;">d)</p>
    </div>
    <div class="commen_class unit-num">
        <p class="unit_box">Unit no</p>
        <input type="text" name="unit28" placeholder="Unit no" class="class_input" list="list_unit">
    </div>
    <div class="commen_class level-que">
        <p class="unit_box">Level</p>
        <input type="text" name="level28" placeholder="Level" class="class_input" list="list_level">
    </div>
    <div class="commen_class marks_que">
        <p class="unit_box">Marks</p>
        <input type="text" name="mark28" placeholder="Marks" class="class_input" list="list_marks">
    </div>
</div>

<!-- e -->


<div class="new_element">
    <div style=" display: flex; justify-content: center; align-items: center; width: 40px; height: 60px; border-right: 1px solid black;" class="box_one0">
        <p style="font-size: 19px;">e)</p>
    </div>
    <div class="commen_class unit-num">
        <p class="unit_box">Unit no</p>
        <input type="text" name="unit29" placeholder="Unit no" class="class_input" list="list_unit">
    </div>
    <div class="commen_class level-que">
        <p class="unit_box">Level</p>
        <input type="text" name="level29" placeholder="Level" class="class_input" list="list_level">
    </div>
    <div class="commen_class marks_que">
        <p class="unit_box">Marks</p>
        <input type="text" name="mark29" placeholder="Marks" class="class_input" list="list_marks">
    </div>
</div>






<!-- Q-6 -->



<br>
<br>
<hr>
<div style="width: 100%; display: flex; justify-content: center;" class="summery_que">
    <p style=" border-radius: 10px; border: none; width: 120px; height: 45px; display: flex; align-items: center; justify-content: center; background-color: #7ff0f0; text-align: center; font-size: 22px; margin-bottom: 10px; margin-top: 20px;">Q. 6</p>
</div>
<!-- <div class="new_element">
    <div style=" display: flex; justify-content: center; align-items: center; width: 40px; height: 60px; border-right: 1px solid black;" class="box_one0">
        <p style="font-size: 19px;">a)</p>
    </div> -->

<!-- a -->
<div class="new_element">
    <div style=" display: flex; justify-content: center; align-items: center; width: 40px; height: 60px; border-right: 1px solid black;" class="box_one0">
        <p style="font-size: 19px;">a)</p>
    </div>

<div class="commen_class unit-num">
    <p class="unit_box">Unit no</p>
    <input type="text" name="unit30" placeholder="Unit no" class="class_input" list="list_unit">
</div>
<div class="commen_class level-que">
    <p class="unit_box">Level</p>
    <input type="text" name="level30" placeholder="Level" class="class_input" list="list_level">
</div>
<div class="commen_class marks_que">
    <p class="unit_box">Marks</p>
    <input type="text" name="mark30" placeholder="Marks" class="class_input" list="list_marks">
</div>
</div>


<!-- b -->

<div class="new_element">
    <div style=" display: flex; justify-content: center; align-items: center; width: 40px; height: 60px; border-right: 1px solid black;" class="box_one0">
        <p style="font-size: 19px;">b)</p>
    </div>

<div class="commen_class unit-num">
    <p class="unit_box">Unit no</p>
    <input type="text" name="unit31" placeholder="Unit no" class="class_input" list="list_unit">
</div>
<div class="commen_class level-que">
    <p class="unit_box">Level</p>
    <input type="text" name="level31" placeholder="Level" class="class_input" list="list_level">
</div>
<div class="commen_class marks_que">
    <p class="unit_box">Marks</p>
    <input type="text" name="mark31" placeholder="Marks" class="class_input" list="list_marks">
</div>
</div>



<!-- c -->

<div class="new_element">
    <div style=" display: flex; justify-content: center; align-items: center; width: 40px; height: 60px; border-right: 1px solid black;" class="box_one0">
        <p style="font-size: 19px;">c)</p>
    </div>

<div class="commen_class unit-num">
    <p class="unit_box">Unit no</p>
    <input type="text" name="unit32" placeholder="Unit no" class="class_input" list="list_unit">
</div>
<div class="commen_class level-que">
    <p class="unit_box">Level</p>
    <input type="text" name="level32" placeholder="Level" class="class_input" list="list_level">
</div>
<div class="commen_class marks_que">
    <p class="unit_box">Marks</p>
    <input type="text" name="mark32" placeholder="Marks" class="class_input" list="list_marks">
</div>
</div>





<div class="widow" style="width: 100%; display: flex; justify-content: center;">

    <input type="submit" name="submit" style=" margin-top: 50px; width: 220px; height: 45px; background-color: #7ff0f0; border: none; border-radius: 10px;">
    <!-- <button class="button_submit_" style=" margin-top: 50px; width: 220px; height: 45px; background-color: #7ff0f0; border: none; border-radius: 10px;" class="button_submit_">Submit</button> -->
</div>

</div>

</form>

            </div>  
        </div>
        

        <div style="margin-left: -1160px; margin-top: 80px;" class="nav_bar_back">
            <h1>
                <i class='bx bx-arrow-back' height="10%" width="10%"></i>
            </h1>
        </div>



        <div class="nav_bar_for_coe" style=" margin-left: -1040px;">

            <div class="header_of_nav ">




                <h1 class="coe_nav"><i class='bx bx-menu' height="10%" width="10%"></i></h1>
            </div>
            <div class="nav_settings ">
                <div class="nav_setting_class ">
                    <a href="# " class="anchore_links ">List valuer</a><br><br>
                </div>
                <div class="nav_setting_class ">
                    <a href="# " class="anchore_links ">Add valuer</a><br><br>
                </div>
                <div class="nav_setting_class ">
                    <a href="# " class="anchore_links ">List moderator</a><br><br>
                </div>
                <div class="nav_setting_class ">
                    <a href="# " class="anchore_links ">Add moderator</a><br><br>
                </div>
                <div class="nav_setting_class ">
                    <a href="# " class="anchore_links ">List subject</a><br><br>
                </div>
                <div class="nav_setting_class ">
                    <a href="# " class="anchore_links ">Add subject</a><br><br>
                </div>


            </div>
            <br>
            <br>
            <!-- <h1 class="coe_arrow "><i class='bx bx-arrow-back'></i></h1> -->
            <br>

            <div class="footer_of_nav ">
            <button class="nav_buttons" style="background-color: #7ff0f0;">Log out</button>
            </div>
        </div>
    </div>
</body>

</html>