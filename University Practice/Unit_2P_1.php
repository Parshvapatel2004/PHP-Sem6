<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doc</title>
</head>
<body>
    <form method="post" action="Unit_2P_1.php">
        <table>
            <tr><td><lable for="name">Name</lable></td>
                <td><input type="text" name="fullname" value=""/></td></tr>
            <tr><td><lable for="email">Email</lable></td>
        <td><input type="email" name="email"/></td></tr>
        <tr><td colspan="2"><input type="submit" name="Submit" value="Submit"/>
    <input type="reset" name="reset" value="Reset"/></td></tr>
        </table>
    </form>
</body>
</html>

<?php
$fullname = $_POST["fullname"];
$email=$_POST["email"];
echo "Form submit following data"."<br>";
echo "Fullname=".$fullname."<br>";
echo "Email=".$email."<br>";
?>