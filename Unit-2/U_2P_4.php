<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practical Four</title>
</head>
<body>
    <form action="U_2P_4.php" method="post">
        <table>
            <caption><b>Add product</b></caption>
            <tr>
                <td><lable for="pname">Productname</lable></td>
                <td><input type="text" name="Pro_name"></td>
            </tr>
            <tr>
                <td><lable for="price">Price</lable></td>
                <td><input type="number" name="Pro_price" step="0.01"></td>
            </tr>
            <tr>
                <td><lable for="qnt">Quality</lable></td>
                <td><input type="number" name="QOH"></td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" name="submit" value="submit">
                    <input type="reset" name="reset" value="reset">
                </td>
            </tr>
        </table>

    </form>
</body>
</html>

<?php
include("Connect.php")

?>
<?php
$pname=$_POST["Pro_name"];
$price=$_POST["Pro_price"];
$qnt=$_POST["QOH"];
if(!empty($pname)&&!empty($price)&&!empty($qnt))
{
    $ins_qry="insert into product(Pro_name,Pro_price,QOH)values
    ('$pname','$price','$qnt')";
            $res=mysqli_query($con,$ins_qry);
            if($res)
            {
                echo "Inserted";
            }
}
else{
    echo "try again";
}
?>



