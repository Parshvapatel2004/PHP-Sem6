<html>
<head>
<title>
post method
</title>
</head>
<body>
    <form method="post" action="Unit_1P_7.php" name="add">
        <lable>fname</lable><input type="text" name="fname" value=""/><br>
        <lable>lname</lable><input type="text" name="lname" value=""/><br>
        <input type="submit" name ="submit" value="submit"/>
    </form>
</body>
</html>

<?php
function string_cat()
{
$fname=$_POST["fname"];
$lname=$_POST["lname"];
$fullname = $fname.$lname."<br>";
echo $fullname;
}
function str_cat($fname,$lname)
{
    $flname=$fname.$lname;
    echo $flname;


}
string_cat();
str_cat($_POST["fname"],$_POST["lname"]);
?>