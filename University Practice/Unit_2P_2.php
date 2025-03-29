<?php
include("Connection.php");
$db_create=("Create database parshva");
$qry=mysqli_query($con,$db_create);
if($qry){
    echo "Database created";
}else{
    echo "Database not created";
}
?>