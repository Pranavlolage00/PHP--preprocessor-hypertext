<?php
    $name=$_POST["t1"];  
    $age=$_POST["t2"];  
    $n=$_POST["t3"];  
    if($name==strtoupper($name))
       echo("<h1>Name=".$name);
    else
       echo("<h1>Name Must be Uppercase");

   if($age>=18)
       echo("<h1>Age=".$age);
   else
      echo("<h1> Age lessthan 18");

   if($n=="indian")
     echo("<br>Nationality:Indian");
  else
     echo("Invalid Nationality");
?>