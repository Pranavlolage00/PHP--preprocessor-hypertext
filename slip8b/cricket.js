function disp()
{
    var xhrobj=false;
    if(window.XMLHttpRequest)
    {
        xhrobj=new XMLHttpRequest();
    }
    else if(window.ActiveXObject)
    {
        xhrobj=new ActiveXObject('Microsoft.XMlHTTP');
    }
    
    var str1= "t1=" + document.getElementById('t1').value;

    xhrobj.onreadystatechange = show;
    xhrobj.open("POST","cricket1.php",true);
    xhrobj.setRequestHeader("content-type","application/x-www-form-urlencoded");
    xhrobj.send(str1);

    function show()
    {
        if(xhrobj.readyState == 4)
        {
            if(xhrobj.status == 200)
            {
                result = xhrobj.responseText;
                document.getElementById('txt').innerHTML = result;
            }
        }
    }
}