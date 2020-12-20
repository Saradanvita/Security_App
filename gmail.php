<!DOCTYPE html>
<html>
<body>
<?php
  if(isset($_POST['sendmail']))
  {
    require 'PHPMailerAutoload.php';
    require 'credentials.php';
    $mail = new PHPMailer;

$mail->SMTPDebug = 4;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = EMAIL;                 // SMTP username
$mail->Password = PASS;                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 250;                                    // TCP port to connect to

$mail->setFrom(EMAIL, 'eadhaar');
$mail->addAddress($_POST['email']);     // Add a recipient
$mail->addReplyTo(EMAIL);
//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Profile modified';
$mail->Body    = 'Your eadhaar account was just modified from a new device. You are getting this email to make sure it was you.';
$mail->AltBody = $_POST['message'];

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}
}
?>
<div class="container">
<div class = "row">
<div class = "col-md-9 col-md-offset-2">
  <form role = "form" method = "post" enctype="multipart/form-data">
     <div class = "row">
        <div class = "col-sm-9 form group">
           <label for = "email"> To Email: </label>
           <input type = "email" class = "form-control" id = "email" name="email" maxlength="50">
        </div>
      </div>
     <div class = "row">
       <div class = "col-sm-9 form-group">
          <label for="subject"> Subject:</label>
          <input type = "text" class = "form-control" id="subject" name = "subject" maxlength = "50">
       </div>
     </div>
     <div class = "row">
       <div class = "col-sm-9 form-group">
          <label for="subject"> Message:</label>
          <textarea class ="form-control" type="textarea" id="message" name = "message" placeholder="Your message here" maxlength="6000" rows="5"></textarea>
       </div>
     </div>
     <div class = "row">
        <div class = "col-sm-9 form group">
          <button type="submit" name="sendmail" class="btn btn-lg btn-success btn-block">Send</button> 
        </div>
      </div>
     </form>
   </div>
 </div>
</div>
</body>
</html>