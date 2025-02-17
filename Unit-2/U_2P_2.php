<?php
$host="localhost";
$user="root";
$pass="";
$con=mysqli_connect($host,$user,$pass);
$db_create="create database db";
$qry=mysqli_query($con,$db_create);
if($qry)
{
	echo "Database Created Successfully";
}
else
{
	echo "Database not created";
}
?>
