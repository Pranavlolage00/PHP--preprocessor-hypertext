function disp(obj)
{

    var x=false;
    if(window.XMLHttpRequest)
    {
         x=new XMLHttpRequest();
    }

    var str1= "t1="+document.getElementById("t1").value;
    x.onreadystatechange=show;
    x.open("POST","teacher.php","true");
    x.setRequestHeader("content-type","application/x-www-form-urlencoded");
    x.send(str1);

    function show()
    {
        if(x.readystate ==4)
        {
            if(x.status==200)
            {
                result=x.responseText;
                document.getElementById('txt').innerHTML=result;
            }
        }
    }
    
}