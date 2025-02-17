<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practical 5</title>
</head>
<body>
    <?php
    $student = array("Name"=>"Hima Patel","Age"=>5,"Height"=>3.4,"City"=>"Ahmedabad");
    echo $student["Name"]."<br>";
    echo $student["Age"]."<br>";
    echo $student["Height"]."<br>";
    echo $student["City"]."<br>";
    foreach($student as $key=>$val)
    {
        echo "<br>[".$key."]=".$val;
    }
    ?>

</body>
</html>