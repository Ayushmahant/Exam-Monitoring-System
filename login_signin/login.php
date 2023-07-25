<!-- Main Login Page -->

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page</title>

<!-- Css starting  -->

   <style>
        * {
            margin: 0%;
            padding: 0%;
        }

        body {
            background-color: #031863;
            overflow-x: hidden;
            

        }

        .nav {
            display: flex;
            background-color: rgb(38, 122, 112);
            height: 140px;
        }

        .name_of_collage {
            width: 85%;
            text-align: center;
            padding-top: 40px;
            padding-right: 180px;
            align-items: center;
        }

        .logo {
            width: 15%;
            justify-content: center;
            display: flex;
            align-items: center;
            padding-left: 40px;
        }

        .name_col {
            font-size: 42px;
        }

        .about_col {
            font-size: 28;
        }

        .logo_collage {
            width: 100px;
            height: 100px;
        }

        .body_of_login_page {
            width: 100%;
            display: flex;
            justify-content: center;
            height: 100%;

        }

        .simple_form_box {
            margin-top: 16%;
            background-color: aliceblue;
            height: 45%;
            width: 25%;
            justify-content: center;
            display: flex;
            flex-direction: column;
            padding: 25px;
            /* border: 1px solid black; */
            border-radius: 10px;
            text-underline-position:

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

        .button {
            width: 180px;
            height: 42px;
            margin-top: 30px;
            border: none;
            background-color: #82EEFD;
            color: rgb(0, 0, 0);
            transition: 0.5s;
            border-radius: 10px;
            font-weight: bold;
            font-size: 18px;
            cursor: pointer;
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

        .one_o {
            margin-left: 5px;
        }


        .exam_img {
            width: 34%;
            height: 25%;
            position: absolute;
            left: 0;
            margin-top: 444px;
            border-radius: 5px;
        }

        .icon_img {
            width: 08%;
            height: 14%px;
            position: absolute;
            left: 0;
            margin-top: 45px;
            margin-left: 350px;
        }
        .logo_img
        {
            width: 55%;
            height: 55%;
            position: absolute;
            margin-left: 70%;
            margin-top: 170px;
        }

        .EMS_name {
            position: absolute;
            margin-top: 50px;
            font-family: 'Times New Roman', Times, serif;
            font-size: 100px;
            color: azure;
            margin-left: 10px;

        }
        
    </style>
<!-- Css End -->

</head>
<body>

    <!--   -->

    <!-- Login box --> 

        <div class="body_of_login_page">
               <img src="Design bg.png" class="exam_img" alt="Image Error">
        <img src="illustraction_imgs.png" class="logo_img" alt="Image Error">
        <img src="Final logo1.png" class="icon_img" alt="Image Error">

        <h1 class="EMS_name">Smart-Setter</h1>
        <div class="simple_form_box">
            <div class="login-name">
                <h1 class="login-name-text">Login</h1><br>
                <hr>
            </div>
                    <!-- Inputs of username and password -->

                   <div class="div-box">

                   <form class="user" action="backend/auth/login_auth.php" method="post" >
                    
                    <label class="info" for="user_name">Login as :</label>
                    <input list="users" name="role" class="box-input one_o" name="users_list" placeholder="Select role" required><br><br>
                    <label class="info" for="user_name">Username:</label>
                    <input name="user" class="box-input" name="users_list" placeholder="Username" required>
                    <datalist id="users">
                      <option value="COE">
                      <option value="Moderator">
                      <option value="Valuer">
                      <option value="Principal">
                      
                    </datalist><br><br>
                    <label for="user_name">Password : </label>
                    <input  name="pass" class="box-input" type="user_name" placeholder="Password" required>
        
        
                    
                 
                </div>

                   <br>
                   <hr>
                   <div class="submit_button">
                         <input type="submit" name="submit" class="button" value="Login">
                             <!-- <button class="button">Login</button> -->
                        
                   </div>
                    </form>
               </div>
        </div>
</body>
</html>