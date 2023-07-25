<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <title>Add Subject</title>
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
            width: 60%;
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
            background-color: #7ff0f0;
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
</head>

<body>
    <div class="body_of_login_page">
        <div class="simple_form_box">

            <!-- Inputs of username and password -->

            <h1 class="coe_options">Add Subject</h2><br>
                <hr>

                <div class="div-box">
                    <form class="user" method="post" action="Backend/add_sub_bk.php" >
                        <label class="info" for="user_name">Branch :</label>
                        <input list="users" class="box-input one" name="branch" placeholder="Choose branch"><br><br>
                        <hr>
                        <label class="info" for="user_name">Semester : </label>
                        <datalist id="sem_options">
                            <option value="Odd"></option>
                            <option value="Even"></option>
                           
                        </datalist>
                        <input list="sem_options" class="box-input two" name="sem"
                            placeholder="Select semester"><br><br>
                        <hr>
                        <label class="info" for="user_name">Course Code :</label>
                        <input class="box-input three" name="coursecode" placeholder="Add Course Code"><br><br>
                        <hr>
                        <label class="info" for="user_name">Course name: </label>
                        <input class="box-input three" name="coursename" placeholder="Add Course Name"><br><br>
                        <hr> <br><br>
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

                        </datalist><br><br>

                        <div style="width: 100%; display: flex; justify-content: center;" class="sub_div">
                     
                     <input type="submit" style=" margin-top: -40px; width: 220px; height: 45px; background-color: #7ff0f0; border: none; border-radius: 10px;" class="button_submit_" name="submit">


                            <!-- <button style=" margin-top: -40px; width: 220px; height: 45px; background-color: #7ff0f0; border: none; border-radius: 10px;" class="button_submit_">Submit</button> -->

                        </div>

                    </form>

                </div>
                <br>

                <!-- <div class="sub_que_que">
                    <p class="question_sub">
                        How many sub questions are there in question no  
                    </p>
                    <input type="text" class="input_number_new" id="que_2">
                </div> -->

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

        </div>


        <div class="nav_bar_back">
            <a href="coe.php">
            <h1>
                <i class='bx bx-arrow-back' height="10%" width="10%"></i>
            </h1>
        </a>
        </div>



        <div class="nav_bar_for_coe ">

            <div class="header_of_nav ">




                <h1 class="coe_nav"><i class='bx bx-menu' height="10%" width="10%"></i></h1>
            </div>
            <div class="nav_settings ">
                <div class="nav_setting_class ">
                    <a href="list_valuver.php " class="anchore_links ">List valuer</a><br><br>
                </div>
                <div class="nav_setting_class ">
                    <a href="Add_valuver.php " class="anchore_links ">Add valuer</a><br><br>
                </div>
                <div class="nav_setting_class ">
                    <a href="final_list_moderator.php" class="anchore_links ">List moderator</a><br><br>
                </div>
                <div class="nav_setting_class ">
                    <a href="Add_moderator.php" class="anchore_links ">Add moderator</a><br><br>
                </div>
                <div class="nav_setting_class ">
                    <a href="list_subject.php" class="anchore_links ">List subject</a><br><br>
                </div>
                <div class="nav_setting_class ">
                    <a href="add_sub_final" class="anchore_links ">Add subject</a><br><br>
                </div>
                <div class="nav_setting_class">
                    <a href="insert_timetable.php" class="anchore_links">Add timetable</a><br><br>
                </div>


            </div>
            <br>
            <br>
            <!-- <h1 class="coe_arrow "><i class='bx bx-arrow-back'></i></h1> -->
            <br>

            <div class="footer_of_nav ">
                <button class="nav_buttons ">Log out</button>
            </div>
        </div>
    </div>
</body>

</html>