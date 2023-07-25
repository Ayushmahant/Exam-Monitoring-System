<!DOCTYPE html>
<html lang="en">

<head> 
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Question</title>
    <style>
        * {
            margin: 0%;
            padding: 0%;
            box-sizing: border-box;
            font-family: Arial;
        }

        body {
            height: 100vh;
            background-color: #301E67;
            place-items: center;
            display: grid;
            overflow-y: hidden;
        }

        .content {
            margin-top: 0%;
            background-color: aliceblue;
            height: 100%;
            width: 80%;
            /* justify-content: center; */
            display: flex;
            flex-direction: column;
            padding: 10px;
            border-radius: 10px;
            align-items: center;
        }

        .outerbox {
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
            padding-top: 10px;
            margin: 4%;
        }

        .course_name {
            width: 100%;
            height: 50px;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 20px;
        }

        .input_course {
            width: 320px;
            height: 50px;
            text-align: center;
            color: black;
            border-radius: 10px;
            font-size: 18px;
            border: 1px solid black;
        }

        .outerbox_1 {
            display: flex;
            width: 100%;
            /* background-color: black; */
            height: auto;
            justify-content: space-around;
            margin-top: 10px;
        }

        .naming {
            display: flex;
            width: 100%;
            height: 50px;
            margin-top: 30px;
        }

        .one {
            width: 100px;
            height: 50px;
            margin-left: 19px;
        }

        .twolo {
            width: 100px;
            height: 50px;
            margin-left: -50px;
        }

        .three {
            height: 50px;
            width: 220px;
            margin-left: 34px;

        }

        .four {
            height: 50px; 
            width: 650px;
            margin-left: 30px;
        }

        .input_o {
            width: 100px;
            height: 50px;
            text-align: center;
            color: black;
            border-radius: 10px;
            border: 1px solid black;
            font-size: 18px;
        }

        .text_area {
            font-size: 20px;
        }

        .two {
            width: 150px;
        }

        .cla {
            font-size: 20px;
            color: rgb(28, 116, 86);
            /* text-decoration: underline; */
            transition: 0.5s;
            display: flex;
            align-items: end;
        }

        .cla:hover {
            font-size: 20px;
            color: rgb(28, 116, 86);
            text-decoration: underline;
            transition: 0.5s;


        }

        .if_else {
            margin-top: -10px;
            width: 64%;
            height: auto;
            text-align: right;
        }
        .que_for_img{
            width: 100%;
            height: auto;
            display: flex;
        }
        .green_text{
            margin-top: 10px;
            color: rgb(28, 116, 86);
            text-decoration: underline;
        }
        .img_que{

            margin-left: 50px;
            margin-top: 8px;
        }
        .outerbox_2{
            width: 300px;
            height: 40px;
            border: 1px solid black;
            /* background-color: rgb(86, 129, 114); */
            display: flex;
            margin-top: 10px;
            align-items: center;
            display: none;
            margin-right: -535px;
        }
        .out_box{
            display: block;
        }
        .end_of_the_page{
            width: 100%;
            height: auto;
        }
        .yes_no{
            display: flex;
            width: 100%;
            justify-content: center;
            margin-top: 5px;
            margin-left: 250px;

        }
        .yes{
            display: flex;
            margin-left: 30px;
            margin-right: 30px;
        }
        .no{
            display: flex;
            margin-left: 30px;
            margin-right: 30px;
        }
        .end_start{
            width: 100%;
            display: flex;
            justify-content: center;
        }
        .commen{
            width: 200px;
            height: 60px;
            font-size: 16px;
            background-color: aquamarine;
            margin-top: 40px;
            border: none;
            border-radius: 15px;
            margin-left: 20px;
            margin-right: 20px;

        }
        .end_end{
            width: 100%;
            display: flex;
            justify-content: center;
        }
        .class{
            width: 400px;
        }
        .heading{
            margin-top: 20px;
        }
        .system_img{
        }
        .img{
            height: 100px;
            width: 100px;
        }
    </style>
    <script>
        function fun()
           {
            var if_else1 = document.getElementById("rd1");
            var if_else2 = document.getElementById("rd2");

            if(if_else1.checked==true)
              {
                // alert("hello baby");
                document.querySelector("#collin").style.display = "block";
                document.querySelector("#color_yes").style.color = "green";
                document.querySelector("#color_no").style.color = "black";
              }
            else if(if_else2.checked==true) 
              {
                // alert("babu maderchood");
                document.querySelector("#collin").style.display = "none";
                document.querySelector("#color_no").style.color = "green";
                document.querySelector("#color_yes").style.color = "black";
              }  
           }
           fun();
    </script>
</head>

<body>



    <?php  

$code = $_GET['code'];

$pid = $_GET['pid'];
$qid = $_GET['qid'];

$setno = $_GET['set'];

$set = "set{$_GET['set']}";






?>

<!-- 
<script type="text/javascript">
    alert('<?php echo $set;
 ?>');
</script>
 -->

<?php 

$servername = "localhost";
$username = "root";
$password = "";
$db="question_bank";

// Create connection
$conn = new mysqli($servername,$username,$password,$db);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";



$fet_val = "SELECT * FROM $code WHERE id = '$qid'";
$fet_val_up = mysqli_query($conn,$fet_val);

if (mysqli_num_rows($fet_val_up) > 0) {
   
   $fet_ed_que = mysqli_fetch_array($fet_val_up);


   
}

    ?>
    <div class="outerbox"> 
        <div class="content">
            <h1 class="heading">Edit question</h1>
            <div class="course_name">

                        <form action="question/edit_que_bk.php?qid=<?php echo $qid;?>&set=<?php echo $setno; ?>&pid=<?php echo $pid; ?>" method="post" enctype="multipart/form-data">

                <input type="hidden" class="input_course" name="course" placeholder="Select Course" value="<?php echo $code; ?>" list="course">
<!--                 <datalist id="course">
                    <option value="IT101G">
                    <option value="MH101G">
                    <option value="CM101G">
                    <option value="AI101G">
                    <option value="CE101G">
                </datalist> -->

            </div>
            <div class="naming">
                <div class="one cla">
                    <h3>Unit no</h3>
                </div>


                <div class="three cla">
                    <h3>Level</h3>
                </div>


                <div class="twolo cla">
                    <h3>Marks</h3>
                </div>



                <div class="four cla">
                    <h3>Question</h3>
                </div>
            </div>
            <div class="outerbox_1">
                <div class="unit">
                    <input type="text" class="input_o" name="unit" placeholder="Unit no" value="<?php echo $fet_ed_que[1]; ?>" list="course_one">
                    <datalist id="course_one">
                        <option value="1">
                        <option value="2">
                        <option value="3">
                        <option value="4">
                        <option value="5">
                        <option value="6">
                    </datalist>
                </div>






                <div class="unit">
                    <input type="text" class="input_o two" name="level" value="<?php echo $fet_ed_que[2]; ?>" placeholder="Level" list="course_three">
                    <datalist id="course_three">
                        <option value="R">
                        <option value="U">
                        <option value="A">

                    </datalist>
                </div>




                <div class="unit">
                    <input type="text" class="input_o" value="<?php echo $fet_ed_que[3]; ?>" name="mark" placeholder="Marks" list="course_two">
                    <datalist id="course_two">

                        <option value="2">
                        <option value="3">
                        <option value="4">
                        <option value="6">

                    </datalist>
                </div>





                <div class="unit">
                    <textarea class="text_area" rows="10" cols="50" name="question" value="<?php echo $fet_ed_que[4]; ?>" placeholder="Type Question here...."><?php echo $fet_ed_que[4]; ?></textarea>

                </div>

   <?php 
      


      if ($fet_ed_que[5] != "") {
          ?>
 
 <input type="hidden" value= "<?php echo $fet_ed_que[5]; ?>" name="img">

          <?php 

      }
    

   ?>

<img alt="no image for this question" class="img" src="../image/<?php echo $fet_ed_que[5]; ?>">

            </div>


            <div class="if_else">
                <h3 class="green_text">If there is img for Question</h3>
                <div class="yes_no">
                    <div class="yes">
                        <input type="radio" id="rd1" name="grp1" value="bhokat ja" onclick="fun()"><h3 id="color_yes">Yes</h3></input>
                    </div>
                    <div class="no">
                        <input type="radio" id="rd2" name="grp1" value="bhokat ja" onclick="fun()"><h3 id="color_no">No</h3></input>
                    </div>
                </div>
            </div>
            <div class="outerbox_2" id="collin">
                <input type="file" name="img" value="<?php echo $fet_ed_que[5]; ?>" class="img_que">
            </div>

            <div class="end_of_the_page">
                <br>
                 <div class="end_start">
                    <!-- <button class="commen "> -->
                <input type="submit" class="commen" name="" value="Add">        
                    <!-- </button> -->




<?php 

// if (isset($_POST['submit'])) {
//     // code...


//  $filename = $_FILES["img"]["file"];

//     $tempname = $_FILES["img"]["tmp_file"];  

//   }


?>
<!-- <input type="hidden" name="filename" value="<?php echo $filename; ?>">

<input type="hidden" name="tmpname" value="<?php echo $tempname; ?>">
 -->

                </form>
                    
                </div>
            </div>


        </div>
    </div>
</body>

</html>