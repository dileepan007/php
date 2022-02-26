<!DOCTYPE html>
<html>
    <head>
        <title>hello</title>
        </head>
    <body>
<form>
<label>Name</label>    
<input type="text"id="name">
<label>City</label>    
<input type="text"id="city">
<button onclick="savedata()">save data</button>
</form>
<script>
    function savedata()
    {
        if(window.XMLHttpRequest){
            a=new XMLHttpRequest();
        }
        else
        {
            a=new ActiveXObject("Microsoft.XMLHTTP");
        }
        a.onreadystatechange=function(){
            if(a.readyState==4&&a.status==200)
            {
                alert(a.responseText);
            }
        }
        var name=document.getElementByID("name").value;
        var city=document.getElementByID("city").value;
        var url="save.php";
        var val="name="+name&"city="+city;
        a.open("POST",url,true);
        a.setRequestHeader("content-type","application/x-www-form-urlencoded");
        a.setRequestHeader("content-type",val.length);
        a.setRequestHeader("connection","close");
        a.send(val);

    }
    </script>
</body>
</html>