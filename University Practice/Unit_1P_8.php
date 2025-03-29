<?php
$arr=array(99,78,67,76,34,45,67,23,55,66,999);
$cnt=count($arr);
echo(nl2br("\n Before Sorting"));
for($i=0;$i<$cnt;$i++)
{
    echo "<br>arr[".$i."]=".$arr[$i];
}

for($i=0;$i<$cnt;$i++)
{
    for($j=$i+1;$j<$cnt;$j++)
    {
        if($arr[$i]>$arr[$j])
        {
            $tmp=$arr[$i];
            $arr[$i]=$arr[$j];
            $arr[$j]=$tmp;
        }
    }

}
echo(nl2br("\n After sorting in asseding order"));
for($i=0;$i<$cnt;$i++)
{
    echo "<br>".$arr[$i];
}

for($i=0;$i<$cnt;$i++)
{
    for($j=$i+1;$j<$cnt;$j++)
    {
        if($arr[$i]<$arr[$j])
        {
            $tmp=$arr[$i];
            $arr[$i]=$arr[$j];
            $arr[$j]=$tmp;
        }
    }

}
echo(nl2br("\n After sorting in decending order"));
for($i=0;$i<$cnt;$i++)
{
    echo "<br>".$arr[$i];
}

?>