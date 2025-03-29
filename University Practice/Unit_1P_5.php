<?php
$student=array("Name"=>"ParshvaPatel","Age"=>"21","height"=>"3.4","city"=>"Ahmedabad");
echo $student["Name"]."<br>";
echo $student["Age"]."<br>";
echo $student["height"]."<br>";
echo $student["city"]."<br>";
foreach($student as $key=>$val)
{
    echo "<br>[".$key."]=".$val;
}

?>