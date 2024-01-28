<?php
 class circle
 {
    function area($r)
    {
        $a=3.14*$r*$r;
        echo"<br>area of circle=".$a;        
    }
    function circum($r)
    {
         $c=2*3.14*$r;
         echo"<br>circumfernce of circle=".$c;
    }
 }
 $ob=new circle();
 $ob->area(3.4);
 $ob->circum(5.6);
?>