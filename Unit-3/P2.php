<html>
    <head>
        <title>
            Form data P2 page 1
        </title>
        <script type="text/javascript" language="javascript">
            function showdata()
            {
                var xmlhttp;
                if(window.XMLHttpRequest){
                    xmlhttp=new XMLHttpRequest();
                }

                var uname = document.getElementById('uname').value;

                xmlhttp.open("POST",'P2(2).php?uname='+uname,true);

                xmlhttp.onreadystatechange=function()
                {
                    if(xmlhttp.readystate==4 && xmlhttp.status==200)
                {
                    document.getElementById('info').innerHTML=xmlhttp.responseText;
                // }else{
                //     document.getElementById('info').innerHTML="Response nor set something gone a wrong "
                 }
                }
                xmlhttp.send();
            }

        </script>
    </head>
    <body>
        <form id="frm" action="P2(2).php" method="get" onKeyup="showdata(); return false;">
            Enter Username : <input type="text" name="uname" id="uname"/>
        </form>
        <h1><div id="info"></div></h1>
    </body>
</html>