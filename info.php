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
$con =mysqli_connect("localhost","root","","profile",3306);
if($con)
{
	$name = $_POST['name'];
        $email = $_POST['email'];
        $gender = $_POST['gender'];
        $address = $_POST['address'];
        $adhaar = $_POST['adhaar'];
        $pan = $_POST['pan'];
        $qualifications = $_POST['qualifications'];
        $linkedin = $_POST['linkedin'];
        $designation = $_POST['designation'];
        $github = $_POST['github'];
        $experience = $_POST['experience'];
	$sql1 = "insert into information values('$name','$email','$gender','$address','$adhaar','$pan','$qualifications','$linkedin','$designation','$github','$experience')";
	$rs1 = mysqli_query($con,$sql1);
        if($rs1)
        {
                 echo '<button> Logout</button> ';
	}
         else
		 echo 'unable to insert';
          
}
?>
</p>
</h1>
</body>
</html>
