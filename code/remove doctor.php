<html>
<head>
<style>
body{
background-image:url("bg2.jpg");
background-position:center;
background-size:cover;
}
</style>
</head>
<form method="POST">
<h1 style="position:absolute;top:100px;left:100px;font-family:'algerian';color:black">REMOVE DOCTOR FROM HOSPITAL</h1>
<h1 style="position:absolute;top:190px;left:100;color:black;left:100px">ENTER EMAIL OF DOCTOR</h1>
<input type="text" name="email" placeholder="enter doctor's here"style="position:absolute;top:260px;left:100px;height:35px;width:400px;border-width:2px" required>
<h1 style="position:absolute;top:280px;color:black;left:100px">ENTER SPECIALIZATION OF DOCTOR</h1>
<input type="text" name="spe" placeholder="enter your specialization of doctor" style="border-width:2px;position:absolute;top:345px;left:100px;height:35px;width:400px" required>
<input type="submit" value="remove" style="position:absolute;top:410px;left:100px;height:40px;width:400px;color:blue;background-color:white;font-size:20px;font-family:algerian" required>
</form>
<button onclick="document.location='admin work.php'" style="background-color:yellow;width:150px">back</button>
<body>
</body>
</html>
<?php
include("conn.php");
$email=$_POST['email'];
$spe=$_POST['spe'];
if(empty($spe) and empty($email))
{
	echo"<h3 style='color:red;position:absolute;left:100px;top:450px'><u>"."PLESAE ENTER SPECIALIZATION AND EMAIL"."</u></h3>";
}
else
{
$query="select * from doctors where specialization='$spe' and email='$email';";
$q=mysqli_query($conn,$query);
$num=mysqli_num_rows($q);
if($num==1)
{
	$q1="delete from doctors where specialization='$spe' and email='$email';";
	$que=mysqli_query($conn,$q1);
	if($que)
	{
		echo"<h3 style='color:red;position:absolute;left:100px;top:450px'><u>"."DOCTOR REMOVED SUCCESSFULLY"."</u></h3>";

	}
}
else
{
	echo"<h3 style='color:red;position:absolute;left:100;top:450px'><u>"."THIS DOCTOR IS NOT IN HOSPITAL"."</u></h3>";
}
}
?>