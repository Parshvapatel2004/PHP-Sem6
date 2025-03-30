function uppercase()
{
    var xmlhttp;
    if(window.XMLHttpRequest){
        xmlhttp= new XMLHttpRequest();

    }
    var n = document.getElementById('n').value;

    xmlhttp.open("GET","P3(2).php?n="+n,true);

    xmlhttp.onreadystatechange=function()
    {
        if(xmlhttp.readyState==4 && xmlhttp.status==200)
        {
            document.getElementById('info').innerHTML=xmlhttp.responseText;
        }
    }
    xmlhttp.send();
}