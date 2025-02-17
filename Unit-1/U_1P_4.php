<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practical 4 </title>
</head>
<body>
<?php
$sub = array(1,2,3,4,5,55,66,77,88);
$cnt = count($sub);
echo $cnt;

for($i=0;$i<$cnt; $i++)
{
    echo "<br>arr[$i]=".$sub[$i];
} 
foreach($sub as $val)
{
    echo "<br>".$val;
}
$m = array("banana",11,333.33,'A');
print_r($m);
for($j=0;$j<count($m);$j++)
{
    echo "<br>arr[".$j."]=".$m[$j];
}
?>
</body>
</html>