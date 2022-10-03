<?php
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $msg=$_POST['msg'];

    $to='atoz7015@gmail.com';
    $subject='Form Submission';
    $message= 'Name: '.$name."\n"."phone: ".$phone,"\n"."Wrote the following: "."\n\n".$msg;
    $headers="From: ".$email;
    
    if(mail($to, $subject, $message, $headers)){
        echo "<h1>Send Successfully! Thank You"." ".$name.",We Will contact you shortly!</h1>";
    }
    else{
        echo "something went Wrong";
    }
}
?>