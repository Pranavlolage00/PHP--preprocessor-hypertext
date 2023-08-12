<?php
   $a=array(10,20,33,40,50,56,60);

     $b=array_splice($a,2,3,90);
     
     echo("deleted elements=<br>");
     print_r($b);

     echo("<br>insert elements=<br>");

     print_r($a);

?>