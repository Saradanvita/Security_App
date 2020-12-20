<html>
<head><META http-equiv="Content-Type" content="text/html; charset=utf-8">
<style>
body{
 background-image: url('register.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
  
}
</style>
</head>
<body>
<div>
    <h1 align = "center" >Personal Information</h1>
    <form method="post" action="send_mail.php">
<?php
session_start();
$con= mysqli_connect("localhost", "root", "", "profile", 3306);

if($con)

{
    
     $name = $_SESSION['uname1']; 
     $sql= "SELECT * FROM information WHERE name LIKE '$name'" ;
    
     $rs=mysqli_query($con,$sql);
    
     $n1 = mysqli_num_rows($rs);
     if($n1>0)
 
     {   
 
    $col=mysqli_fetch_row($rs);

     }
}
else
 
    echo "unable to connect data base";

?>
   Name: <br> 
    <input type="text" name="name" value="<?php echo $col[0]?>"/>
    <br>
    Email:<br>
    <input type = "text" name="email" value="<?php echo $col[1]?>"/>
    <br>
    Gender:<br>  
    <input type="text" name="gender" value="<?php echo $col[2]?>"/>    <br>
    Address:<br>
    <input type="text" name="address" value="<?php echo $col[3]?>"/>
     <br>
   aadhar card no: <br> 
    <input type="text" name="adhaar" value="<?php echo $col[4]?>"/>
    <br>

   pan card no:  <br>
    <input type="text" name="pan" value="<?php echo $col[5]?>"/>
    <br>

   Qualification: <br> 
    <input type="text" name="qualifications" value="<?php echo $col[6]?>"/>
    <br>
   
   LinkedIn profile name:<br>  
    <input type="text" name="linkedin" value="<?php echo $col[7]?>"/>
    <br>

   Current Designation:<br>  
    <input type="text" name="designation" value="<?php echo $col[8]?>"/>
    <br>
   github link: <br> 
    <input type="text" name="github" value="<?php echo $col[9]?>"/>
    <br>

    Past Experience:<br>
    <input type="text" name="experience" value="<?php echo $col[10]?>"/>
     <br>    
    <br>    
   <button >Submit</button>    
<br>
</form></div></form></div></div></body></html>