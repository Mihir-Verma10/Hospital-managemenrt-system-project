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
<h1 style="position:absolute;top:100px;left:120px;font-family:'algerian';color:black">LOGIN FORM FOR MANAGER</h1>
<h1 style="position:absolute;top:190px;left:50;color:black;left:100px">EMAIL ID</h1>
<input type="text" name="email" placeholder="enter your email id"style="position:absolute;top:260px;left:100px;height:35px;width:400px;border-width:2px" required>
<h1 style="position:absolute;top:280px;color:black;left:100px">PASSWORD</h1>
<input type="password" name="pwd" placeholder="enter your password" style="border-width:2px;position:absolute;top:345px;left:100px;height:35px;width:400px">
<input type="submit" value="LOGIN" style="position:absolute;top:410px;left:100px;height:40px;width:400px;color:blue;background-color:white;font-size:20px;font-family:algerian" required>
</form>
<body>
<button onclick="document.location='home.php'" style="background-color:yellow;width:150px">back</button>

</body>
</html>
<?php
include("conn.php");
$email=$_POST['email'];
$password=$_POST['pwd'];
if(empty($password) and empty($email))
{
	echo"<h3 style='color:red;position:absolute;left:100px;top:450px'><u>"."PLESAE ENTER EMAIL AND PASSWORD"."</u></h3>";
}
else
{
$query="select * from manager where email='$email' and password='$password';";
$q=mysqli_query($conn,$query);
$num=mysqli_num_rows($q);
if($num==1)
{
	header('location:manager work.php');
}
else
{
	echo"<h3 style='color:red;position:absolute;left:100;top:450px'><u>"."PLEASE ENTER CORRECT EMAIL AND PASSWORD"."</u></h3>";
}
}
?>