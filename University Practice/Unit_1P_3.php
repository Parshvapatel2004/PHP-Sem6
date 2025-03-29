<?php
$age="20";
$gender="m";
if($age>18){
    if($gender=='m' || $gender=='M'){
        echo("Aligible for vote And male");
    }else{
        echo("Aligible for vote And female");
    }
}else{
    echo ("Not Aligible for vote");
}
?>