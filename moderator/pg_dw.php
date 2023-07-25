<?php
require 'pdfcrowd.php';

$id=$_GET['pid'];
$setno=$_GET['set'];
    // Program to display URL of current page.
    // if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
    //     $link = "https";
    // else $link = "http";
      
    // // Here append the common URL characters.
    // $link .= "://";
      
    // // Append the host(domain name, ip) to the URL.
    // $link .= $_SERVER['HTTP_HOST'];
      
    // // Append the requested resource location to the URL
    // $link .= $_SERVER['REQUEST_URI'];
      
    // Print the link
// $link = "http://localhost/EMS/moderator/Question_paper.php?id={$id}&&setno={$setno}";
// $link = "https://stackoverflow.com/questions/5860198/uploading-pdf-files-to-mysql-server";
$link = "http://localhost/EMS/moderator/Question_paper.php?id=8&&setno=1";

   // echo $link;





$client = new \Pdfcrowd\HtmlToPdfClient("demo", "ce544b6ea52a5621fb9d55f8b542d14d");
$pdf = $client->convertUrl($link);

$name = "../QuestionPaper_pdf/hello.pdf";

if (move_uploaded_file($pdf,$name)) {
	echo "yes";
}

echo $pdf;




?>