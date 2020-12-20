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
<h2>
<p style="text-align:center">
<?php
 session_start();
 $con =mysqli_connect("localhost","root","","reg",3306);
 if($con)
 {
	 $uname = $_POST['uname'];
         $psw = $_POST['psw'];
         $_SESSION['uname1'] = $uname;
         $sql = "SELECT * FROM registration WHERE username LIKE '$uname' AND password LIKE '$psw'" ;
         $rs1 = mysqli_query($con,$sql);
         $n1 = mysqli_num_rows($rs1);
	 if($n1>0)
	{
                echo '<br>';
                echo '<br>';
		echo "You have registered in our system!!<br>";
                echo "You are our validated user!<br>";
		$row1=mysqli_fetch_row($rs1);
		echo "$row1[0] <br> $row1[1] <br><br> ";
                echo '<h3 align = "center" >Click on continue to build your profile<br></h3>';
                echo '<h2 align = "center"><a href = retrieve.php> Continue </a></h2>';
        }
        else
        {
          echo '<br>';
          echo '<br>';
          echo '<br>';
          echo "Invalid user!!";
        }
 }
 else
	 echo "unable to connect";
?>
<p>
<h2>
</body>
</html>