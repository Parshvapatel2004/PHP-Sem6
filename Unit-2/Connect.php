<?php
$host="localhost";
$user="username";
$pass="";
$db="db1";
$con = mysqli_connect($host,$user,$pass,$db);
if($con)
{
    echo "connect";
}
else{
    echo "not connect";
}

?>