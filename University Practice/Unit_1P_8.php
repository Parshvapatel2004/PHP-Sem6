<?php
$arr=array(12,35,78,98,4,6,7,90,45);
echo nl2br("\n Before sorting\n");
for($i=0;$i<count($arr);$i++)
{
    echo "<br>arr[".$i."]=".$arr[$i];
}
for($i=0;$i<count($arr);$i++)
{
    for($j=$i+1;$j<count($arr);$j++)
    {
        if($arr[$i]>$arr[$j])
        {
            $tmp=$arr[$i];
            $arr[$i]=$arr[$j];
            $arr[$j]=$tmp;
        }
    }
}
echo nl2br("\n After sorting array into Assending order \n");
for($i=0;$i<count($arr);$i++)
{
    echo "<br>".$arr[$i];
}


for($i=0;$i<count($arr);$i++)
{
    for($j=$i+1;$j<count($arr);$j++)
    {
        if($arr[$i]<$arr[$j])
        {
            $tmp=$arr[$i];
            $arr[$i]=$arr[$j];
            $arr[$j]=$tmp;
        }
    }
}
echo (nl2br("\n After Shorting array in desending order \n"));
for($i=0;$i<count($arr);$i++)
{
    echo "<br>".$arr[$i];
}
?>