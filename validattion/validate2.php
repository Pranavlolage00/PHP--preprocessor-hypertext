<?php
$us=$_POST["t1"];
$em=$_POST["t2"];
$ag=$_POST["t3"];
$flag=0;
 if(filter_var($em,FILTER_VALIDATE_EMAIL))
 {
 $flag++;
 }
if(!empty($us))
{
    $flag++;
}
if(filter_var($ag,FILTER_VALIDATE_INT)&& $ag<=100)
{
    $flag++;
}

   if($flag==3)
   {
    echo("<br>username=".$us);
    echo("<br>Email=".$em);
    echo("<br>age=".$ag);
   }
   else
   {
     echo("enter valid information...");
   }
?>