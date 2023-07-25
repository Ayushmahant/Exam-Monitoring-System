<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <title>COE</title>
    <style>
        * {
            margin: 0%;
            padding: 0%;

        }

        .body {
            background-color: #301E67;
        }

        .body_of_login_page {
            width: 100%;
            background-color: #301E67;
            height: 100%;
            display: flex;
        }

        .simple_form_box {
            background-color: aliceblue;
            height: 92.5%;
            width: 20%;
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
            background-color: aquamarine;
            cursor: pointer;
            transition: 0.5s;
            border-radius: 10px;
            font-size: 18px;
        }

        .button_one:hover {
            box-shadow: 10px 10px 5px rgb(230, 223, 173);
            transition: 0.5s;
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

        .box_button {
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            /* justify-content: space-around; */
            background-color: aliceblue;
            align-items: center;
        }

        .one {
            width: 280px;
            height: 60px;
            background-color: rgb(131, 238, 238);
            border: none;
            border-radius: 10px;
            font-size: 18px;
            cursor: pointer;
            margin-top: 40px;
            margin-bottom: 40px;
            transition: 0.5s;

        }

        .one:hover {
            background-color: #eea369;
            transition: 0.5s;
        }

        .div-2 {
            width: 90%;
            height: 90%;
            overflow-y: hidden;
            border-radius: 20px;
            background-color: aliceblue;
            display: flex;
            justify-content: center;
            align-items: center;
        }
      

        .main-div {
            width: 90%;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
        }

        .heading {
            width: 100%;
            height: 100px;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: -180px;
        }
          .santa{
            width: 100%;
            height: 100%;
            overflow-y: scroll;
            display: none;
            margin-top: 400px;
        }

        .bx-log-out:hover {
            color: #c86316;

        }
        .main{
            display: none;
        }
        .content{
            display: none;
        }
        .info_box {
            width: 90%;
            height: 55%;
            overflow-y: scroll;
            align-items: center;
            display: flex;
            flex-direction: column;
            margin-top: 40px;
        }
        .coe_options {
            margin-top: -80px;
            text-align: center;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            font-size: 60px;
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
            width: 14.9%;
        }
        
        .div_two_new {
            width: 19.8%;
        }
        
        .div_three_new {
            width: 25%;
        }
        
        .div_four_new {
            width: 40%;
        }
        .form_collector_new {
            display: flex;
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
        .div_one {
            width: 15%;
        }
        
        .div_two {
            width: 20%;
        }
        
        .div_three {
            width: 25.2%;
        }
        
        .div_four {
            width: 40.1%;
        }
        
        .div_five {
            width: 5%;
            font-size: 22.5px;
        }
        .tities{
            width: 90%;
            display: none;
            margin-top: 700px;
        }
        
    </style>
    <script>
       // var ver = 1;
       
       function cric()
          {
            // if(ver == 3)
            //   {
            //      document.getElementById('santa').style.display = 'none';two_t
            //   }
            // ver = 2;
            // document.getElementById('default').style.display = 'none';
            // document.getElementById('tities').style.display = 'block';
window.location = "view_timetable.php";

          }
        function cric_c()
          {
            // if(ver == 2)
            //   {
            //      document.getElementById('tities').style.display = 'none';
            //   }
            // ver = 3;
            // document.getElementById('default').style.display = 'none';
            // document.getElementById('santa').style.display = 'block';
            // // document.getElementById('two_t').style.backgroundColor = '#eea369';
            window.location = "Set_selection.php";

          }  
    </script>
</head>

<body>
    <div class="body_of_login_page">
        <div class="simple_form_box">
            <div class="koyal">
                <!-- <i style="font-size: 50px; color: rgb(247, 154, 87);" class='bx bx-door-open'></i> -->
                <!-- <i style="font-size: 50px; color: rgb(0, 0, 0);" class='bx bx-log-out'></i> -->
            </div>
            <div class="box_button">
                <div class="button_commen two">
                    <h1 style="text-decoration: underline; color: #0a582a;">Principal Options</h1>
                </div>
                <div class="button_commen " id="two_t">
                    <button class="one" onclick="cric()">View Timetable</button>
                </div>
                <div class="button_commen" id="two">
                    <button class="one" onclick="cric_c()">Finalize set</button>
                </div>
            </div>
        </div>








        <div class="main-div">
               
            <div class="div-2" style="flex-direction: column;">
                <div class="heading" >
                    <h1 style="font-size: 35px; font-weight: lighter; font-family: Arial, Helvetica, sans-serif; text-decoration: underline;">Timetable</h1>
                    <a href="../login_signin/login.php">
                    <i style="font-size: 35px; color: rgb(0, 0, 0); position: absolute; right: 120; top: 50;"
                        class='bx bx-log-out'></i></a>
                </div>
                

                    <!-- <h1 class="coe_options">Timetable</h2><br> -->
                
                        <div class="info_box">
                            <div class="form_collector">
                                <div class="div_aplhanew div_one_new">
                                    <p>Date</p>
                                </div>
                                <div class="div_aplhanew div_two_new">
                                    <p>Department</p>
                                </div>
                                <div class="div_aplhanew div_three_new">
                                    <p>Semister</p>
                                </div>
                                <div class="div_aplhanew div_four_new">
                                    <p>Course Code</p>
                                </div>
        
                            </div>


<?php 


  

$servername = "localhost";
$username = "root";
$password = "";
$db="coe_func";

// Create connection
$conn = new mysqli($servername,$username,$password,$db);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";
 

$fet_tities = "SELECT * FROM timetable ";
$fet_tities_up = mysqli_query($conn,$fet_tities);

if (mysqli_num_rows($fet_tities_up) > 0) {
    // code...

while($fetch_tties = mysqli_fetch_array($fet_tities_up)){





?>

                
        

                            <div class="form_collector_new">
                                <div class="div_aplha div_one">
                                    <p><?php echo $fetch_tties[1];?></p>
                                </div>
                                <div class="div_aplha div_two">
                                    <p><?php echo $fetch_tties[2];?></p>
                                </div>
                                <div class="div_aplha div_three">
                                    <p><?php echo $fetch_tties[3];?></p>
                                </div>
                                <div class="div_aplha div_four">
                                    <p><?php echo $fetch_tties[4];?></p>
                                </div>
                                
        
                            </div>        

<?php   


}





}


?>


        
        
                            
        
                            
                                
        
                            
        
                            
        
        
                        </div>
                </div>
</div>