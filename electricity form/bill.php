<?php
   
$cname=$_POST["t1"];
$cno=$_POST["t2"];
$units=$_POST["t3"];

$total=150;
if($units<=50)
  $total=$total+$units*3.50;
else if($units>50&&$units<=150)
    $total=$total+$units*4;
else if($units>150&&$units<=250)
    $total=$total+$units*5.20;
else if($units>250)
    $total=$total+$units*6.50;

echo("<h2>Customer Name:".$cname);
echo("<h2>Consumer No:".$cno);
echo("<h2>Number Of Units".$units);
echo("<h2>Total Bill=".$total);

?>