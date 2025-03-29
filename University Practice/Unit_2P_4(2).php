<?php
include("Conneciton.php");
$sel_qry="SELECT * FROM product";
$res=mysqli_query($con,$sel_qry);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3><a href="Unit_2P_4.php">+Add New Record</a></h3>
    <table>
        <tr>
            <th>Product Id</th>
            <th>Product Name</th>
            <th>Product Price</th>
            <th>Product Quantity</th>
        </tr>
        <?php
        while($row=mysqli_fetch_array($res))
        {
        ?>
        <tr>
            <td><?php echo $row["Pro_Id"];?></td>
            <td><?php echo $row["Pro_name"];?></td>
            <td><?php echo $row["Pro_price"];?></td>
            <td><?php echo $row["QOH"];?></td>
        </tr>
        <?php
        }
        ?>
    </table>
</body>
</html>