<html>
<head>
<title>
Practice program 3 unit 1
</title>
</head>
<body>
<?php
$age=19;
$gender="m";

	
if($age>18)
{	
    if ($gender=="M" || $gender=="m")
    {
			echo ("You are alaigable for vote and you are male candidate..");
    }
    else{
			echo ("You are aligable for vote and you are female candidate..");
    }
}
else{
	echo("You are not alaigbale for vote..");
		}

?>
</body>
</html>