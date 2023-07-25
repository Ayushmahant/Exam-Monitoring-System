<?php session_start(); 
 ?>


<!DOCTYPE html> 
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Modarator.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Generate Question Paper</title>

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
}

.content {
    margin-top: 0%;
    background-color: aliceblue;
    height: 80%;
    width: 80%;
    /* justify-content: center; */
    display: flex;
    flex-direction: column;
    padding: 10px;
    border-radius: 10px;
    align-items: center;
}

.outerbox {
    width: 80%;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100%;
    padding-top: 10px;
    margin: 4%;
}


.sub{
    display: flex;
    width: 100%;   
}
.sub_name{
    margin-right: 22px;
    margin-top: 11px;

}
.input_class{
    font-size: 15px;
    width: 300px;
    height: 45px;
    background-color: rgb(255, 255, 255);
    
    text-align: center;
   
}
.sub_input
{
    size: 20px;
}
.outer_div
{
    margin-top: 100px;
}

.sub_code
{
    display: flex;
    width: 100%; 
    height:50px;
    margin-top: 40px;

}
.code{
    width:  150px;
    margin-top: 11px;

}

.code_input
{
    size: 20px;

}

.submit
{
    width: 120px;
    height: 40px;
    margin-right: 20px;
    background-color: aquamarine;
    border:none;

}

.clear
{
    width: 120px;
    height: 40px;
    margin-left: 20px;
    background-color: aquamarine;
    border:none;    
}

.button_class{
    width: 800px;
    display: flex;
    justify-content: center;
    /* background-color: bisque; */
    margin-top: 20px;
    border-radius: 10px;
}

.set_display
{
    display: flex;
    margin-top: 60px;
    width: 70%;
    height: 40%;
    /* background-color: black; */
    justify-content: space-around;
}

.set
{
    width: 100px;
    height: 90px;
    margin-top: 20px;
}

.set_paper
{
    width:220px;
    height: 50px;
    font-size: 20px;
}


    </style>

    <script>
        var i = 0;

        function fun() {
            i = i + 1;

            if (i == 1) {
                alert("Set 1 genarated succesfully");

                document.querySelector("#id_1").style.backgroundColor = "aquamarine";
            }
            else if (i == 2) {
                alert("Set 2 genarated succesfully");

                document.querySelector("#id_2").style.backgroundColor = "aquamarine";
            }
            else {
                alert("Set 3 genarated succesfully");

                document.querySelector("#id_3").style.backgroundColor = "aquamarine";
            }
        }
        function fun_two() {
            // i = i * 0;
            
            alert("Cleared");
            // document.querySelector("#id_1").style.backgroundColor = "white";
            // document.querySelector("#id_3").style.backgroundColor = "white";
            // document.querySelector("#id_2").style.backgroundColor = "white";

            // console.log(i);
            // window.location = 'Modarator.php';
        }  
    </script>

</head>

<body>



<?php  
error_reporting(E_ERROR | E_PARSE);
function fun_two(){
  // session_destroy();
   $_SESSION['response'] = 0;
   //echo "gbnbbbbbbbbbbbbbbbbbbn";
// header('location:/Modarator.php');
   header('Location: '.$_SERVER['PHP_SELF']);


}

function fun_three(){    ?>
<script type="text/javascript">
    <?php 
$code = '<script> document.getElementById("code").value;</script>' ;

    echo $code;
    ?>
</script> <?php 

}

?>

    <div class="outerbox">
        <div class="content">
            <div class="outer_div">
                <div class="sub">
                    <a href="../login_signin/login.php">
                    <i style="font-size: 35px; color: rgb(0, 0, 0); position: absolute; right: 20%; top: 13%;"
                        class='bx bx-log-out'></i></a>
                    <div class="sub_name">
                        <h3>Course Code:</h3>
                    </div>
                    <div class="sub_input">

                        <form method="post" action="question/que_gen.php">



<?php
include('../connection/coe_db_con.php');
include('question/question_bank_con.php');

$fet_sub = "SELECT * FROM subject";

$fet_sub_up = mysqli_query($conn,$fet_sub);

$fet_sub_row = mysqli_num_rows($fet_sub_up);



 ?>








                        <input type="text" id="code" name="coursename" placeholder="Choose course" list="list_sub" class="input_class">

                            <?php 
if ($fet_sub_row > 0) {
    
    while ($fet = mysqli_fetch_array($fet_sub_up)) {

        ?>
                                <datalist  id="list_sub">

                            <option value="<?php echo $fet['coursecode']; echo " ({$fet['coursename']})"; ?>">

                          
                            <?php 
                        }

                             ?>
                        </datalist>
                   

                    </div>
                </div>

<!-- 
                <div class="sub_code">
                    <div class="code">
                        <h3>Course-code:</h3>
                    </div>
                    <div class="code_input">
                        <input type="text" name="coursecode" placeholder="Choose Course-code" list="list_sub_code" class="input_class">
                        
                 <?php    
    while ($fef = mysqli_fetch_array($fet_sub_up)) {

?>                       
                      <datalist id="list_sub_code">
                            <option value="<?php echo $fef['coursename']; ?>">

                      


 <?php
 
}
 ?> 
  </datalist>
                    </div> -->
<?php 


    }



?>
                </div>
                <br>
                <br>

                <div class="button_class">
                    <input type="submit" name="submit" class="submit" value="Generate Paper">
                    <!-- //<button onclick="fun()" ></button> -->

                     </form>

                    <button  onclick=
            "document.getElementById(
             'code').value = ''" class="clear">Clear</button>

           <!--   <a href="Modarator.php?code='.document.'">
                    <button onclick="document.write('<?php fun_three() ?>');" class="clear">Modarate Paper</button>
                     <br /><br><br>
</a> -->
                </div>
                    <h3><?php echo $_SESSION['code']; ?></h3>

            

            <div class="set_display">

                <div class="set">

                    <?php 
                     
                  $code = $_SESSION['code'];

                  $set_fet = "SELECT * FROM sets where code = '$code'";
                $set_fet_up = mysqli_query($conn_pp,$set_fet);
       //  $i=2;       
         $set_fet_fet = mysqli_fetch_array($set_fet_up);

         for ($b = 6; $b >=2; $b--) { 
             
        
           if ($set_fet_fet[$b] == null) {
                 // code...
             }else{
                ?> 

    <?php  
     $bk = $b-1;
      echo '<script language="javascript" type="text/javascript">
alert("Set '.$bk.' Generated Succesfully. Click on Set button to Moderate Set");
</script>';
      ?>  
</script>
                 <?php 
                 break;
             }


        }

for ($i=2; $i <=6 ; $i++) { 
    // code...
$setno = $i - 1;
                 if ($set_fet_fet[$i] == "") {
                     // code...
                 }else{

                    echo '<a href="Question_paper.php?id='.$set_fet_fet[0].'&&setno='.$setno.'">';
                    echo'<button class="set_paper" id="id_1">
Set'.$setno.'
               </button>
</a> ';
          ?>
<!-- <a href="Question_paper.php?id='' ">  -->
<!-- 
               <button class="set_paper" id="id_1">
                Set 1
               </button>
</a>  -->

<?php 
//echo $i;
}
             // echo $set_fet_fet[$i];

   }          //        ?>
             <!-- // 
<?php 



// }

?>
                </div>
              <div class="set">
                    <button class="set_paper" id="id_2">Set 2</button>
                </div>

                <div class="set">
                    <button class="set_paper" id="id_3">Set 3</button>

                </div> -->

            </div>
</div>


        </div>
    </div>


<?php  

 


//echo "yes darling";
?>







        </div>
    </div>

<?php 



?>




</body>

</html>