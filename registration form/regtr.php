<?php

$sname=$_POST["t1"];
$course=$_POST["t2"];
$mno=$_POST["t3"];

if(!empty($sname))
{
   echo("student name=".$sname);
}
 if(filter_var($mno,FILTER_VALIDATE_INT)&& strlen($mno)==10)
 {
    echo("<br>mobile number=".$mno);
    echo("<br><br>registration id=".$sname[0].$sname[1].$sname[3].$mno);
 }
 else
 {
 echo("<br>invalid mobile number..");
 }                                  




?>