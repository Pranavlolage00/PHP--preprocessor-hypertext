function check(obj)
{
    xhrobj=false;
    if(window.XMLHttpRequest)
    {
        xhrobj=new XMLHttpRequest();
    }
    else if(window.ActiveXObject)
    {
        xhrobj=new ActiveXObject("Microsoft.XMLHTTP");
    }

    var str1="t1="+ document.getElementById("t1").value;
    var str2="$t2="+ document.getElementById("t2").value;
    var str3="$t3="+ document.getElementById("t3").value;
    
    xhrobj.onreadystatechange=show();
    xhrobj.open('POST','voter.php',true);
    xhrobj.setRequestHeader("content-type","application/x-www-form-urlencoded");
    xhrobj.send(str1+str2+str3);

    function show()
    {
        if(xhrobj.readystate==4)
        {
            if(xhrobj.status==200)
            {
                result=xhrobj.responseText;
                document.getElementById("txt").innerHTML=result;
            }
        }
    }

}