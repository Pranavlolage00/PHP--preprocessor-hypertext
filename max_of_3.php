<?php
 function maxim($a,$b,$c)
 {
    if(($a>$b)&&($a>$c))
     return $a;
    if(($b>$a)&&($b>$c))
     return $b;
    else
      return $c;
 }
  
 $a=maxim(10,20,30);
   echo("maximum no=".$a);
 ?>