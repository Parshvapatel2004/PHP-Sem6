<?php
$host="localhost";
$user="root";
$pass="";
$dbname="parshva";
$con=mysqli_connect($host,$user,$pass,$dbname);
if($con){
    echo "connected";
}else{
    echo "not connected";
}
?>