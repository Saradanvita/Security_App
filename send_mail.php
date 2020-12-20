<html>
<head>
<style>
body {
  background-image: url('blue.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}
</style>
</head>
<body>
<h1>
<p style="text-align:center">
<form method="post" action="main_website.php" align = "center">
<?php
    $mailto = $_POST['email'];
    $mailSub = 'Security alert!!';
    $mailMsg = 'Your profile in VProtect has been modified. If it is not you please check your activity and secure your account!';
   require 'PHPMailer-master/PHPMailerAutoload.php';
   $mail = new PHPMailer();
   $mail ->IsSmtp();
   $mail ->SMTPDebug = 0;
   $mail ->SMTPAuth = true;
   $mail ->SMTPSecure = 'ssl';
   $mail ->Host = "smtp.gmail.com";
   $mail ->Port = 465; // or 587
   $mail ->IsHTML(true);
   $mail ->Username = "eadhaar9@gmail.com";
   $mail ->Password = "sanjanasarada";
   $mail ->SetFrom("eadhaar9@gmail.com");
   $mail ->Subject = $mailSub;
   $mail ->Body = $mailMsg;
   $mail ->AddAddress($mailto);
   if(!$mail->Send())
   {
       echo "Mail Not Sent";
   }
   else
   {
       echo '<button> Logout</button> ';
   }

 ?>



   

