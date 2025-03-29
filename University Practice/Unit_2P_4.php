<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="Unit_2P_4.php" method="post">
        <table>
            <caption><b>Add product</b></caption>
            <tr><td><lable for="name">Productname</lable></td>
        <td><input type="text" name="Pro_name"/></td></tr>
        <tr>
            <td><lable for="price">Price</lable></td>
            <td><input type="number" name="Pro_price"/></td>
        </tr>
        <tr>
            <td><lable for ="quantity">Quantity</lable></td>
            <td><input type="number" name="QOH"/></td>
        </tr>
        <td colsnap="2"><input type="submit" name="Submit" value="Submit"/>
    <input type="reset" name="Reset" value="Reset"/></td>
        </table>

    </form>
</body>
</html>

<?php
error_reporting(0);
include("conneciton.php");
$productname=$_POST["Pro_name"];
$price=$_POST["Pro_price"];
$qoh=$_POST["QOH"];
if(!empty($productname)&&!empty($price)&&!empty($qoh))
{
    $ins_qry="insert into product(Pro_name,Pro_price,QOH)values
    ('$productname','$price','$qoh')";
    $res=mysqli_query($con,$ins_qry);
    if($res)
    {
        echo "product insert successfully";
    }
}else{
    echo "Internal server error";
}
?>


