<html>
    <head>
        <title>
            Redirect Pracital 3
        </title>
    </head>
    <body>
        <?php
        $name=$_GET["n"];

        if($name==""){
            echo "Please enter your name";
        }else{
            echo strtoupper($name);
        }
        ?>
    </body>
</html>