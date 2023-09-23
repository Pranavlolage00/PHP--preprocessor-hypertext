<?php
$cname=$_POST["t1"];
$pname=$_POST["t2"];
$rs=$_POST["t3"];
$qty=$_POST["t4"];

$a=explode(" ",$pname);
$b=explode(" ",$qty);
$c=explode(" ",$rs);

echo("<table border='1'>");
echo("<tr><th colspan='5'> Customer Name=".$cname);
echo("<tr><th>Sr No:");
echo("<th>Product Name:");
echo("<th>Quentity:");
echo("<th>Rate:");
echo("<th>Total:");
echo("</tr>");

$t=0;
for($i=0; $i<count($a); $i++)
{
   echo("<tr><td>".($i+1));
   echo("<td>".$a[$i]);
   echo("<td>".$b[$i]);
   echo("<td>".$c[$i]);
   echo("<td>".$b[$i]*$c[$i]);
   echo("</tr>");
   $t=$t+$b[$i]*$c[$i];
}
echo("<tr><th colspan='5'>Total Bill Amount=".$t);
echo("</table>");
?>