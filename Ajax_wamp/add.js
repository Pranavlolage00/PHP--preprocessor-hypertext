function addition($obj)
{
     var x=false;
     if(window.XMLHttpRequest)
     {
         x=new XMLHttpRequest();
     }
     else
     {
           x=new ActiveXObject("Microsoft.XMLHTTP");
     }
       var str1= "t1="+document.getElementById("t1").Value;
       var str2= "&t2="+document.getElementById("t2").value;

       obj.onreadystatechange= show;
       obj.open("POST","add.php",true);
       obj.setRequestHeader("content-type","application/x-www-form-urlencoded");
       obj.send(str1+str2);

       function show()
       {
        if(x.readyState==4)
        {
            if(x.status==200)
            {
               result=x.responseText;
               document.getElementById('txt').innerHTML=result;
            }
        }
       }

}