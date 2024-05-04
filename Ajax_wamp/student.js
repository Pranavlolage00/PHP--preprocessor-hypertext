function show_stud()
{
     var xhrobj=false;
     if(window.XMLHttpRequest)
      {
          xhrobj=new XMLHttpRequest();
      }
      else if(window.ActiveXObject)
      {
        xhrobj=new ActiveXObject('Microsoft.XMLHTTP')
      }
    var str1= "t1="+document.getElementById("s1").value;

    xhrobj.onreadystatechange= show;
    xhrobj.open('POST','student.php',true);
    xhrobj.setRequestHeader("content-type","application/x-www-form-urlencoded");
    xhrobj.send(str1);

    function show()
    {
        if(xhrobj.readyState ==4)
        {
            if(xhrobj.status==200)
            {
                result=xhrobj.resoponseText;
                document.getElementById('txt').innerHTML=result; 
            }
        }
    }
}