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
<h1 style="position:absolute;top:120px;left:50px;color:black;font-family:'algerian">ADD NEW DOCTOR IN HOSPITAL</h1>
<input type="text" name="id" placeholder="GIVE ID TO DOCTORE" style="position:absolute;top:360;left:350px;height:35px;width:215px" required>
<input type="text" name="name" placeholder="ENTER NAME" style="position:absolute;top:220px;left:50px;height:35px;width:215px" required>
<input type="text" name="address" placeholder="ENTER ADDRESS" style="position:absolute;top:220px;left:350px;height:35px;width:215px" required>
<input type="text" name="mobile" placeholder="ENTER MOBILE NUMBER" style="position:absolute;top:290;left:50px;height:35px;width:215px" required>
<input type="text" name="email" placeholder="ENTER EMAIL ID" style="position:absolute;top:290;left:350px;height:35px;width:215px" required>
<input type="text" name="spe" placeholder="ENTER DOCTOR SPECIALIZATION" style="position:absolute;top:360;left:50px;height:35px;width:215px" required>
<input type="submit" value="DONE" style="position:absolute;top:430;left:50px;height:35px;width:520px;color:white;background-color:blue;font-size:20px;font-family:'algerian'">
</form>
<body>
<button onclick="document.location='admin work.php'" style="background-color:yellow;width:150px">back</button>

</body>
</html>
<?php
include("conn.php");
$na=$_POST['name'];
$address=$_POST['address'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];
$spe=$_POST['spe'];
$id=$_POST['id'];
if(empty($na) or empty($mobile) or empty($address) or empty($spe) or empty($email) or empty($id))
{
	echo'<h3 style="position:absolute;top:460px;left:30px;color:red;font-family:algerian"><u><blink>'."please enter data required data with correct manner"."</blink></h3>";

}
else
{
$query1="select * from doctors where email=$email;";
$q1=mysqli_query($conn,$query1);
$num=mysqli_num_rows($q1);
	if($num>=1)
	{
	echo'<h3 style="position:absolute;top:460px;left:50px;color:red;font-family:algerian"><u><blink>'."the doctor is already in your hospital"."</blink></h3>";
	}
	else
	{

	$query="insert into doctors values('$id','$na','$address',$mobile,'$email','$spe');";
$q=mysqli_query($conn,$query);
		if($q)
		{
	echo'<h3 style="position:absolute;top:460px;left:100px;color:red;font-family:algerian"><u><blink>'."doctor added"."</blink></h3>";

		}
	}
}
?>