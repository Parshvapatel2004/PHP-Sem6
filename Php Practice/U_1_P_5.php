<?php
$student=array("Name"=>"Parshva Patel","Age"=>26,"Height"=>5.4,"City"=>"Visnagar");
echo $student["Name"]."<br>";
echo $student["Age"]."<br>";
echo $student["Height"]."<br>";
echo $student["City"]."<br>";
foreach($student as $key=>$val){
	echo "<br>[".$key."]=".$val;
}


?>