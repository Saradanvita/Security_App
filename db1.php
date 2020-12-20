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
<?php
$con =mysqli_connect("localhost","root","","reg",3306);
if($con)
{
	$uname = $_POST['username'];
        $email = $_POST['email'];
        $psw = $_POST['password_1'];
	$sql1 = "insert into registration values('$uname','$email','$psw')";
	$rs1 = mysqli_query($con,$sql1);
        if($rs1)
        {
                 echo '<br>';
                 echo '<br>';
                 echo '<br>';
		 echo '                    Congratulations!!<br>';
                 echo '                    You have registered into our server!!';
                 echo '<h3 align = "center" >Click on continue to build your profile<br></h3>';
                echo '<h2 align = "center"><a href = profile.php> Continue </a></h2>';
	}
         else
		 echo 'unable to insert';
          
}
?>
</p>
</h1>
</body>
</html>
