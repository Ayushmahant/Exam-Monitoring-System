<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <title>Add valuer</title>
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
            margin-top: 1%;
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
            margin-left: 80px;
        }
        
        .two {
            margin-left: 98;
        }
        
        .three {
            margin-left: 55px;
        }
        
        .four {
            margin-left: 70px;
        }
        
        .five {
            margin-left: 35px;
        }
        
        .seven {
            margin-left: 42px;
        }
        
        .six {
            margin-left: 3px;
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
            margin-top: 0px;
            text-align: center;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        }
        
        .nav_bar_for_coe {
            width: 5%;
            background-color: black;
            height: 5%;
            margin-top: 20px;
            margin-left: 0px;
            border-radius: 50px;
            position: absolute;
            margin-left: -52%;
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
            margin-top: 30px;
            margin-left: 0px;
            border-radius: 50px;
            position: absolute;
            margin-left: -60%;
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
        
        .header_of_nav {
            display: flex;
            width: 100%;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>

<body>
    
    <div class="body_of_login_page">
        <div class="simple_form_box">
 
            <!-- Inputs of username and password -->
            <h1 class="coe_options">Add Valuer</h2><br>
                <hr>

                <div class="div-box">
                    <form class="user" action="Backend/coe_addvaluer.php" method="post">
                        <label class="info" for="user_name">Institute:</label>
                        <input class="box-input one" name="institute" placeholder="Select Institute"><br><br>
                        <hr>
                        <label class="info" for="user_name">Name:</label>
                        <input class="box-input two" name="name" placeholder="Enter name"><br><br>
                        <hr>
                        <label class="info" for="user_name">Mobile no :</label>
                        <input class="box-input three" name="mobile" placeholder="Enter Mobile no"><br><br>
                        <hr>
                        <label class="info" for="user_name">Email id :</label>
                        <input class="box-input four" name="email" placeholder="Enter Email id"><br><br>
                        <hr>
                        <label class="info" for="user_name">Department:  &nbsp;  &nbsp; &nbsp; &nbsp;</label>
                        <input class="box-input six" list="users" name="dept" placeholder="Select Department"><br><br>
                        <hr>
                        <!-- <label class="info" for="user_name">Course code:</label>
                        <input list="users" class="box-input seven" placeholder="Add Course code" name="coursecode" pla><br><br>
                        <hr>
                        <label class="info" for="user_name">Course name:</label>
                        <input list="users" class="box-input five" placeholder="Add Course name" name="coursename" pla> -->
                        <br><br>
                        <!-- <hr> -->

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

<div class="submit" >
                  
       <input type="submit" class="button_one one_four" name="submit" >



                    <!-- <button class="">Submit</button> -->
                </div>


                    </form>
                </div>
                
                <br>
                <hr>
        </div>
        <div class="nav_bar_back">
            <a href="coe.php">
            <h1>
                <i class='bx bx-arrow-back' height="10%" width="10%"></i>
            </h1>
        </a>
        </div>
        <div class="nav_bar_for_coe">
            <div class="header_of_nav">

                <h1 class="coe_nav"><i class='bx bx-menu'></i></h1>
            </div>
            <br>
            <br><br>
            <div class="nav_settings">
                <div class="nav_setting_class">
                    <a href="list_valuver.php" class="anchore_links">List valuer</a><br><br>
                </div>
                <div class="nav_setting_class">
                    <a href="Add_valuver.php" class="anchore_links">Add valuer</a><br><br>
                </div>
                <div class="nav_setting_class">
                    <a href="final_list_moderator.php" class="anchore_links">List moderator</a><br><br>
                </div>
                <div class="nav_setting_class">
                    <a href="Add_moderator.php" class="anchore_links">Add moderator</a><br><br>
                </div>
                <div class="nav_setting_class">
                    <a href="list_subject.php" class="anchore_links">List subject</a><br><br>
                </div>
                <div class="nav_setting_class">
                    <a href="add_sub_final.php" class="anchore_links">Add subject</a><br><br>
                </div>
                 <div class="nav_setting_class">
                    <a href="insert_timetable.php" class="anchore_links">Add timetable</a><br><br>
                </div>
            </div>
            <br>
            <br>
            <div class="footer_of_nav">
                <button class="nav_buttons">Log out</button>
            </div>
        </div>
    </div>
</body>

</html>