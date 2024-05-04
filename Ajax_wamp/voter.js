function check_voter(obj)
{
 var XHRobj=false;
if(window.XMLHttpRequest)  
{
   XHRobj=new XMLHttpRequest();
}
else if(window.ActiveXObject) 
{
  XHRobj=new ActiveXObject("Microsoft.XMLHTTP");
}

var str1= "t1=" + document.getElementById("t1").value;     
var str2= "&t2=" + document.getElementById("t2").value;     
var str3= "&t3=" + document.getElementById("t3").value;     

XHRobj.onreadystatechange = show;
XHRobj.open('POST', 'voter.php', true);
XHRobj.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
XHRobj.send(str1+str2+str3);                

function show()
{
if (XHRobj.readyState == 4)
{
if (XHRobj.status == 200)
{
result = XHRobj.responseText;       
document.getElementById('txt').innerHTML = result;  
}}}}