<?php
$parshva=array(12,34,56,78,90,12,3,5,6,7,8,9);
$patel=count($parshva);
echo $patel;
for($i=0;$i<$patel;$i++)
{
    echo "<br>arr[".$i."]=".$parshva[$i];
}
foreach($parshva as $val)
{
    echo "<br>".$val;
}

?>