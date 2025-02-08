<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Use of if Else in php</title>
</head>
<body>
    <?php
            $age="19";
            $gender="m";
            if($age>18)
            {
                if($gender=='M' || $gender=='m')
                {
                    echo "You are eligible for Vote and you are male candidate";
                }
                else{
                    echo "You are eligible for Vote and you are female candidate";
                }

            }
            else{
                print("You are not elegible for vote....");
            }

    ?>
</body>
</html>