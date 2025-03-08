<html>
<head>
<title>
Post data
</title>
</head>
<body>
<form name="add" method="post" action="U_1_P_7.php">
<lable for="n1">Fname<lable><input type="text" name="fname" value=""/><br>
<lable for="n2">Lname<lable><input type="text" name="lname" value=""/><br>
<input type="submit" name="submit" value="submit"/>
</form>
</body>
</html>

<?php
function string_cat()
{
	$fname=$_POST["fname"];
	$lname=$_POST["lname"];
	
	$fullname=$fname.$lname."<br>";
	echo $fullname;
}
function str_cat($fname,$lname){
	$flname=fname.lname;
	echo $flname;
}
string_cat();
str_cat($_POST["fname"],$_POST["lname"]);
?>