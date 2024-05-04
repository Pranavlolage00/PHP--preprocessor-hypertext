<?php

     $nm=$_POST["t1"];
     $age=$_POST["t2"];
     $n=$_POST["t3"];

     if($nm==strtoupper($nm))
        echo"Name=".$nm;
    else 
      echo"name should be uppercase...";

    if($age>=18)
       echo"Age=".$age;
    else
       echo"age should be greater than 18..";

    if($n=='Indian')
    {
        echo"nationality=".$n;
    }
    else
       echo"nationality=".$n;
?>