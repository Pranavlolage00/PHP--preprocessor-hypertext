<?php
  $a=array(10,20,30,40,50);
  $b=array(10,22,30,44,50);

  $c=array_merge($a,$b);
  $c=array_unique($c);

echo("union of two");
print_r($c);
echo"<br>";
shuffle($c);
echo("<br>randome numbers ");
print_r($c);
?>