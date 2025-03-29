<!DOCTYPE html>
<html lang="en">
<head>
    <title>Form Data P1</title>
    <script type="text/javascript" language="javascript">
        function showdata()
        {
            var xmlhttp;
            if(window.XMLHttpRequest){
                xmlhttp=new XMLHttpRequest();
            }

            var uname=document.getElementById("uname").value;
            var pass=document.getElementById("pass").value;

            xml.open("POST",'P1(2).php?uname='+uname+'&pass='+pass,true);
                                    
            xml.http.onreadystagechange=function()
            {
                if(xmlhttp.readystate==4 && xmlhttp.status==200){
                    document.getElementById("info").innerHTML=xmlhttp.responseText;
                }
            }
            xmlhttp.send();
        
        
        }

    </script>
</head>
<body>
    <form id="frm" name="frm" method="get" action="P1(2).php" onSubmit="showdata(); return false;">
        Enter Username:<input type="text" name="uname" id="uname"/></br>
        Enter Password:<input type="password" name="pass" id="pass"/></br>
        <input type="submit" name="submit" value="submit"/>
    </form>
    <h1><div id="info"></div></h1>
</body>
</html>