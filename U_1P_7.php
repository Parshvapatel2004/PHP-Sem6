<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post Data</title>
</head>
<body>
    <form name="add" method="post" action="function.php">
        <lable for="n1">Fname</lable><input type="text" name="fname" value=""/><br>
        <lable for="n2">Lname</lable><input type="text" name="lname" value=""/><br>
        <input type="submit" name="submit" value="submit"/>
    </form>
</body>
</html>
function.php
<?php
function string_cat()
{
    $fname=$_POST["fname"];
    $lname=$_POST["lname"];
    $fullname=$fname.$lname."<br>";
    echo $fullname;
}
// function call with argument
function str_cat($fname,$lname)
{
    $flname=$fname.$lname;
    echo $flname;
}
string_cat();
str_cat($_POST["fname"],$_POST["lname"]);
?>