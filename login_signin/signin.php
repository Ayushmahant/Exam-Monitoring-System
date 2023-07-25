<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signin</title>
</head>
<body>
    <!-- Main Login Page -->

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login page</title>
    
    <!-- Css starting  -->
    
        <style>
                   *{
            margin: 0%;
            padding: 0%;
            }
            body{
                background-color: rgb(193, 246, 217);
    
            }
            .nav{
             display: flex;
             background-color: rgb(38, 122, 112);
             height: 140px;
            }
            .name_of_collage{
                width: 85%;
                text-align: center;
                padding-top: 40px;
                padding-right: 180px;
                align-items: center;
            }
            .logo{
                width: 15%;
                justify-content: center;
                display: flex;
                align-items: center;
                padding-left: 40px;
            }
            .name_col{
                font-size: 42px;
            }
            .about_col{
                font-size: 28;
            }
            .logo_collage{
                width: 100px;
                height: 100px;
            }
            .body_of_login_page{
                width: 100%;
                display: flex;
                justify-content: center;
                height: 100%;
            }
            .simple_form_box{
                margin-top: 8%;
                background-color: aliceblue;
                height: 45%;
                width: 25%;
                justify-content: center;
                display: flex;
                flex-direction: column;
                padding: 25px;
                /* border: 1px solid black; */
                border-radius: 10px;
            }
            .username_input{
                display: flex;
                font-size: 13px;
                margin-top: 20px;
                margin-left: 20px;
            }
            .password_input{
                font-size: 13px;
                margin-top: 10px;
                margin-left: 20px;
                display: flex;        
            }
            .input_feild{
                margin-left: 40px;
            }
            .box-input{
                width: 200px;
                height: 25px;
                margin-top: 5px;
                text-align: center;
            }
            .one{
                margin-left: 5px;
            }
            .login-name{
                width: 100%;
                text-align: center;
                font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            }
            .button{
                width: 180px;
                height: 42px;
                margin-top: 30px;
                border: none;
                background-color: aquamarine;
                color: rgb(0, 0, 0);
                transition: 0.5s;
                border-radius: 10px;
                font-weight: bold;
                font-size: 18px;
                cursor: pointer;
            }
            .submit_button{
                display: flex;
                justify-content: center;
            }
            .forgot-password{
                width: 100%;
                text-align: center;
                color: rgb(1, 41, 28);
                text-decoration: none;
                margin-top: 20px;
            }
            .div-box{
                margin-left: 45px;
                margin-top: 20px;
            }        
            .one_o{
                margin-left: 5px;
            }
        </style>
    
    <!-- Css End -->
    
    </head>
    <body>
    
        <!-- Nav bar including collage logo and name -->
    
    
        <div class="nav">
            <div class="logo">
                <img class="logo_collage"
                src='Government_polytechnic_nagpur_government_polytechnic_sadar_nagpur_logo.jpglogo-removebg-preview.png'
                alt='Website logo'>
            </div>
            <div class="name_of_collage">
                <h1 class="name_col">GOVERNMENT POLYTECHNIC NAGPUR</h1>
                <h3 class="about_col">(An Autonomous Institute of Government of Maharashtra)</h3>
            </div>
        </div>
    
        <!--   -->
    
        <!-- Login box --> 
    
            <div class="body_of_login_page">
                   <div class="simple_form_box">
                    <div class="login-name">
                        <h1 class="login-name-text">Sign Up</h1><br><hr>
                    </div>
    
                        <!-- Inputs of username and password -->
    
                       <div class="div-box">

                       <form class="user" action="backend/auth/signup_auth.php" method="post">
                        <label class="info" for="user_name">Sign-up as: &ensp;  &nbsp; &nbsp; &nbsp;</label>

                        <input type="text" name="role" list="users" placeholder="Select role" class="box-input one_o" name="users_list"><br><br>

                        <label class="info" for="user_name">Create Username:</label>

                        <input type="text" name="user" placeholder="New username" class="box-input" name="users_list">

                        <datalist id="users" name="role" >
                          <option value="COE">
                          <option value="Moderator">
                          <option value="Valuer">
                          <option value="Principle">
                          
                        </datalist><br><br>
                        <label for="user_name">Create Password : </label>
                        <input name="pass" class="box-input" type="user_name" placeholder="New Password">
            
            
                        
                     
                    </div>
                       <div class="forgot-password">
                           <a href="login.php">
                               <p>Already have account...? Login</p>
                           </a>
                       </div>
                       <br>
                       <hr>
                       <div class="submit_button">
                              
                              <input type="submit" class="button" value="Sign Up" >
                                 <!-- <button type="submit" class="button" onclick="submitform()">Sign up</button> -->
                               
<!-- 
                               <script type="text/javascript">
                                   function submitform(){
                                    document.getElementsByID('subform').submit();
                                   }
                               </script> -->
                                
                       </div>
                   </form>
                   </div>
            </div>
    </body>
    </html>
</body>
</html>