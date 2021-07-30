<?php
?>
<html>
<head>
<style>
body{
background-image:url("bg1.jpg");
background-position:center;
background-size:cover;
}
</style>
</head>
<body>
<button><h1 style="position:absolute;top:50px;left:300px;width:800px;font-family:'algerian'"><b/>welcome to HOSPITAL managment system what you want to do</h1></button>
<a href="admit patients.php"><input type="button" style="position:absolute;top:200px;left:500px;font-family:'algerian';font-size:20px;height:50px;width:400px;background-color:yellow" value="ADMIT PATIENT IN HOSPITAL"></a>
<a href="descharge.php"><input type="button" style="position:absolute;top:300px;left:500px;font-family:'algerian';font-size:20px;height:50px;width:400px;background-color:yellow" value="DISCHARGE PATIENT FROM HOSPITAL"></a>
<a href="patients list.php"><input type="button" style="position:absolute;top:400px;left:500px;font-family:'algerian';font-size:20px;height:50px;width:400px;background-color:yellow" value="LIST OF PATIENTS PRESENT IN HOSPITAL"></a>
<button onclick="document.location='home.php'" style="background-color:yellow;width:150px;height:45px">logout</button>
</body>
</html>