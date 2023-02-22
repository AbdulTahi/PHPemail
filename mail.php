<?php
// if (isset($_POST['contact_btn'])){
    $name=$_POST['user_name'];
    $email=$_POST['user_email'];
    $subject= "Chain ENQUIRY";
    $msg=$_POST['user_msg'];
    $to="aattahir4@gmail.com";

    $header="From: ".$name. "\r\n" .
    "CC: formsubmitsp@gmail.com"; 

    $txt = "You recieved from".$name ."\r\nEmail: " .$email ."\r\n
    Message: ".$msg;

    if($email!=NULL){
        mail($to, $subject, $txt, $header);
    }
// }

header('Location:thanks.html');


?>
