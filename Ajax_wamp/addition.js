function addition(obj)
{
 var XHRobj=false;
if(window.XMLHttpRequest) //if browser is Chrome,Safari,IE7+,Opera
{
   XHRobj=new XMLHttpRequest();
}
else if(window.ActiveXObject) //browser IE5,IE6
{
  XHRobj=new ActiveXObject("Microsoft.XMLHTTP");
}

var str1= "t1=" + document.getElementById("t1").value;
var str2= "&t1=" + document.getElementById("t2").value;    //retrive value from HTML

XHRobj.onreadystatechange = show;
XHRobj.open('POST', 'addition.php', true);
XHRobj.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
XHRobj.send(str1+str2);                         //send value to the PHP 

function show()
{
if (XHRobj.readyState == 4)
{
if (XHRobj.status == 200)
{
result = XHRobj.responseText;            //php output store in result variable...
document.getElementById('txt').innerHTML = result;       // result pass to the html div tag ie.txt.....
}}}}