<?php
$cnt=0;
$match=1;
$arr=array(1,3,22,1,4,35,21,1,5,33);
for($i=0;$i<count($arr);$i++)
{
    if($arr[$i]==$match)
    {
        $cnt++;
    }
}
echo $match." is found <b>".$cnt."</b> times<br>";
$cnt=0;
$word="hello";
$string="hello student hello have a nice day";
$v=explode(" ",$string);
//explode function is used to split a string with matching delimiter with string variable
//explode(delimiter,string variable);
for($i=0;$i<count($v);$i++)
{
    if($v[$i]==$word)
    {
        $cnt++;
    }
}
echo $word." is found <b>".$cnt."</b> times"; 
?>