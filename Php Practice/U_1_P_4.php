<?php
$arr=array(1,2,3,4,5,6,7,8,9);
$cnt=count($arr);
echo($cnt);

for($i=0 ; $i<$cnt ; $i++){

	echo "<br>arr[".$i."]=".$arr[$i];
}
foreach ($arr as $val){
	echo "<br>".$val;
}


?>
