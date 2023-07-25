<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <title>COE</title>
    <style>
        * {
            margin: 0%;
            padding: 0%;
        }
        
        
        body{
            background-color: #301E67;  
            overflow-y: hidden;      
        }

        
        .body_of_login_page {
            width: 100%;
            display: flex;
            justify-content: center;
            height: 100%;
            background-color: #301E67;        }
        
        .simple_form_box {
            margin-top: 3%;
            background-color: aliceblue;
            height: auto;
            width: 50%;
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
            margin-left: 90px;
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
            box-shadow: 10px 10px 5px lightblue;
            transition: 0.5s;
        }    

        .button_timetable:hover {
            box-shadow: 10px 10px 5px lightblue;
            transition: 0.5s;
        }

        .button_timetable
        {
            width: 337.5;
            height: 60px;
            margin-top: 50px;
            margin-left: 190px;
            margin-bottom: 30px;
            color: rgb(0, 0, 0);
            /* border: 1px solid black; */
            border: none;
            background-color: #82EEFD;
            cursor: pointer;
            transition: 0.5s;
            border-radius: 10px;
            font-size: 18px;
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
    </style>
</head>

<body>

<script>
    
<?php  





function redir($loc){
echo "string";
   header('location:'.$loc.''); 
}

?>



    document.getElementById("addmod").onclick = function () {
        location.href = "Add_moderator.php";
    };
</script>
</script>



    <div class="body_of_login_page">
        <div class="simple_form_box">

            <!-- Inputs of username and password -->
            <a href="../../login_signin/login.php">
<i style="font-size: 35px; color: rgb(0, 0, 0); position: absolute; right: 25%; top: 7%;"
                        class='bx bx-log-out'></i></a>
            <h1 class="coe_options">COE Options</h1><br>
            <hr>

            <div class="div-box">
                <div class="user">
                    <div class="button">
                        <a href="Add_moderator.php">
                        <button class="button_one one_one"  >Add moderator </button>
                        </a>
                        <a href="Add_valuver.php">
                        <button  class="button_one one_two">Add valuer</button>
                    </a><br>
                    <a href="Assign_moderator.php">
                        <button class="button_one one_four">Assign moderator</button></a>
                        <a href="Assign_valuver.php">
                        <button class="button_one one_four">Assign valuer</button></a>
                    <a href="final_list_moderator.php">
                        <button class="button_one one_four">List moderator</button>
                    </a>
                    <a href="list_valuver.php">
                        <button class="button_one one_four">List valuer</button></a><br>
                        
                        <a href="add_sub_final.php">
                        <button class="button_one one_four"> Add subject</button></a>
                        <a href="list_subject.php">
                        <button class="button_one one_four"> List subject </button></a>
                       <a href="insert_timetable.php">
                        <button class="button_timetable"> Add Timetable </button></a>

                    </div>

<!-- <button id="myButton" class="float-left submit-button" >Home</button> -->

<script type="text/javascript">
    document.getElementById("myButton").onclick = function () {
        location.href = "www.yoursite.com";
    };
            //     function hrefFunction(){
            //     windows.location.href = "https://www.youtube.com";
            // }
</script>

                </div>
            </div>









        </div>

    </div>
</body>

</html>