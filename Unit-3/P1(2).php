<!DOCTYPE html>
<html lang="en">
<head>
    <title>Form data P1(2)</title>
</head>
<body>
    <?php
    $name=$_GET["uname"];
    $pass=$_GET["pass"];

    if($name=="" || $pass==""){
        echo "Please enter your name and password";
    }else{
        echo "Welcome : ".$name;
        echo "<br> Password : ".$pass;
    }
    ?>
</body>
</html>
