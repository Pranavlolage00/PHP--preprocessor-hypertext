<?php

 $a=array(10,20,30,40,56,50);
 print_r($a);

  $s=array_sum($a);

  echo("<br>sum of array=".$s);
  $avg=$s/count($a);
  echo("<br> average=".$avg);

?>