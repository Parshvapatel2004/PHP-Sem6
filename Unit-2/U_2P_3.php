<?php
$host="localhost";
$user="username";
$pass="";
$dbname="db1";
$con=mysqli_connect($host,$user,$pass,$dbname);
$sql = "CREATE TABLE product(Pro_Id INT(3)UNSIGNED AUTO_INCREMENT PRIMARY KEY,
			   Pro_name VARCHAR(100)NOT NULL,
			   Pro_price FLOAT(7,2)NOT NULL,
               QOH INT(5)NOT NULL)";
$qry = mysqli_query($con,$sql);
if($qry)
{
	echo "PRODUCT TABLE CREATED SUCCESSFULLY";
}
else
{
	echo "PRODUCT TABLE NOT CREATED";
}
?>