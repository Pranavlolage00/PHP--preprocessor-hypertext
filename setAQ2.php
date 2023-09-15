<?php
  $a=array("rno"=>"101","name"=>"pranav","per"=>"45.33");
  echo("Display the elements of an array along with the keys<br>");
  print_r($a);

  echo("<br> display the size of array=".count($a));
  unset($a["name"]);
  echo("<br>  after delete element");
  print_r($a);
echo"<br>";
 $a=array_reverse($a);
   print_r($a);

?>