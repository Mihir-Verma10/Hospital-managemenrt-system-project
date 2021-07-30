<html>
<head>
<style>
body{
background-image:url("bg1.jpg");
background-position:center;
background-size:cover;
}
table{
	position:absolute;
	top:150;
	left:400;
	background-color:YELLOW;
}
</style>
</head>
<body>
<h1 style="position:absolute;top:20;left:400px;font-family:algerian;color:red;width:380px"><u>here is the list of all nurses </u></h1></body></html>
<button onclick="document.location='admin work.php'" style="background-color:yellow;width:150px">back</button>
<?php
include("conn.php");
$q1="select * from nurses;";
	$query1=mysqli_query($conn,$q1);
	echo"<center/><table border='1'>
	<tr>
	<th>ID</th>
	<th>NAME</th>
	<th>ADDRESS</th>
	<th>MOBILE</th>
	<th>EMAIL</th>
	</tr>";
	while($row=mysqli_fetch_array($query1))
{
	echo "<tr><td>".$row["id"]."</td> <br/><td>";
	echo $row["name"]." </td><br/><td>";
    echo $row["address"]."</td><td>";
	echo $row["mobile"]." </td><br/><td>";
    echo $row["email"]." </td><br/><td>";
    echo "</tr>";
    
}
echo"</table>";
?>

