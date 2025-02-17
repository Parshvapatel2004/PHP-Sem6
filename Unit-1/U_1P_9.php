<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Untitled Document</title>
</head>
<body>
    <?php
    $arr=array(11,4,23,3,12,59,2,34);
    echo nl2br("\nBefore sorting array\n");
    for($i=0;$i<count($arr);$i++)
    {
        echo "arr[$i]=".$arr[$i]."<br>";
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
    echo nl2br("\nAfter sorting array in Assending\n");
    for($i=0;$i<count($arr);$i++)
    {
        echo $arr[$i]."<br>";
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
echo "<br>After sorting array on Decending<br>";
for($i=0;$i<count($arr);$i++)
{
    echo $arr[$i]."<br>";
}
    ?>
</body>
</html>