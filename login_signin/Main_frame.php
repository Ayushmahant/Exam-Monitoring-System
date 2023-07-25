<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nanum+Gothic:wght@700&family=Titillium+Web:wght@200&display=swap" rel="stylesheet">
    
    <title>Document</title>
    <style>
        * {
            margin: 0%;
            padding: 0%;
        }

        body {
            height: 80%;
            background-image: url('GP_building.png');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
           

            
            
            
        }

        .nav {
            display: flex;
            height: 210px;
            color: rgb(255, 255, 255);
            text-shadow: 1px 1px 2px black, 0 0 15px rgb(0, 0, 0), 0 0 1px rgb(0, 0, 0);
            overflow: hidden;
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

        .body_of_intro {
            width: 100%;
            height: 80%;
            
            margin-top: -20px;
            font-family: 'Titillium Web', sans-serif;
        }

        .exam_monitor {
            width: 100%;
            text-align: center;
            /* padding-top:60px; */
            /* margin-top:40px; */
        }

        .text_of_exam {
            font-family: 'Nanum Gothic', sans-serif;
            /* font-family: 'Titillium Web', sans-serif; */
            font-size: 55px;
            margin-top: 14px;
            color: white;
            text-shadow: 5px 5px 5px black;

        }

        .name_col {
            font-size: 42px;
        }

        .about_col {
            font-size: 28;
        }

        .logo_collage {
            width: 130px;
            height: 130px;
            position: absolute;
            margin-left: 210px;
            margin-bottom: 14px;
        }

        .names {
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            font-size: 32px;
        }

        .names_of_contributor {
            line-height: 50px;
            margin-top: 20px;
            width: 27%;
            color:black;
            padding: 20px;
            border: 2px solid white;
            border-radius: 20px;
            background-color: #e4e4e4;
            transpa
            
        }

        .box_of_names {
            width: 100%;
            justify-content: center;
            display: flex;

        }

        .lead {
            margin-top: 25px;
            text-align: center;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        }

        .guide {
            color:black;
            transition: 0.5s;
            text-underline-position: none;
        }

        .login_button {
            width: 180px;
            height: 42px;
            margin-top: 30px;
            border: none;
            background-color: black;
            color: white;
            transition: 0.5s;
            border-radius: 10px;
        }

        .login_button:hover {
            background-color: white;
            color: black;
            transition: 0.5s;
        }

        .naughty {
            position: absolute;
            z-index: -1;
            width: 100%;
            height: 35%;
        }

        .paper_img
        {
            position: absolute;
            width: 30%;
            height: 40%px;
        }
        .guide_name
        {
            background-color: #f0f0f0;
            width: 350px;
            margin: auto;
            height: 55px;
            border: none;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 10px ;
            color: black;
        
        }
    </style>
</head>

<body>
    <div class="nav">
        
        <div class="logo">
            <img class="logo_collage"
                src='gpn1.png'
                alt='Website logo'>
        </div>
        <div class="name_of_collage">
            <h1 class="name_col">GOVERNMENT POLYTECHNIC NAGPUR</h1>
            <h3 class="about_col">(An Autonomous Institute of Government of Maharashtra)</h3>
        </div>
    </div>

    <div class="body_of_intro">
        <div class="exam_monitor">
            <h1 class="text_of_exam">
                Exam Monitoring System
            </h1>
        </div>

        <!-- <div>
            <img class="paper_img" src="pngtree-campus-test-paper-hand-drawn-illustration-learning-stationery-png-image_3836948-removebg-preview.png">
        </div> -->
        <div class="box_of_names">
            <div class="names_of_contributor">
                <h2 class="names"><b>(1) Girish Kale</b></h2><hr>
                
                <h2 class="names"><b>(2) Ayush Mahant</b></h2><hr>
                
                <h2 class="names"><b>(3) Sayali Sagarkar</b></h2><hr>
                
                <h2 class="names"><b>(4) Amankumar Kumare</b></h2><hr>
                
            </div>
        </div>
        <div class="lead">
            <h1 class="guide"><u>under the guidance of</u></h1><br>
            <h1 class="guide_name">Prof.Lekhraj Vilhekar</h1>
            <a href="login.php">
                <button class="login_button">LOGIN</button>
            </a>
        </div>
    </div>
</body>

</html>