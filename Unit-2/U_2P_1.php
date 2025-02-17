<html>
<head>
<title>Post</title>
</head>
<body>
<form action="U_2P_1.php" method="post">
<table>
<tr>
<td><lable for="name">Name</lable></td>
<td><input type="text" name="fullname"></td>
</tr>
<tr>
<td><lable for="Email">Email</lable></td>
<td><input type="Email" name="Email"></td>
</tr>
<tr>
<td colspan="2"><input type="submit" name="submit" value="submit">
<input type="reset" name="reset" value="reset"></td>
</tr>
</table>
</form>
</body>
<?php
$fullname=$_POST["fullname"];
$email=$_POST["Email"];
echo "Form Submit following Data <br>";
echo "Fullname=".$fullname."<br>";
echo "Email=$email<br>";
?>
</html>