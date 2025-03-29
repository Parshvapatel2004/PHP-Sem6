<?php
include("connection.php");
$db_create="CREATE TABLE product (Pro_Id INT(3) UNSIGNED AUTO_INCREMENT PRIMARY KEY,Pro_name VARCHAR(100) NOT NULL , Pro_price FLOAT(7,2) NOT NULL, QOH INT(5) NOT NULL)";
$qry=mysqli_query($con,$db_create);
if($qry){
    echo "Product table create successfully";
}else{
    echo "Product table not created";
}
?>