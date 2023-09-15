
<?php
   
   $a=array(array(10,20,30,40,50,36),
   array(70,81,90,45,51,66),
   array(45,89 ,61,606,459,6));
echo("display multidimensional array");
print("<br>");
print_r($a[0]);
echo"<br>";
print_r($a[1]);
echo"<br>";
print_r($a[2]);

echo("<br>");
    $flag=0;
   foreach($a as $b)
      {
     if(in_array(10,$b))
     {
      $flag=1;
      break;
     }
   }
   if($flag==1)
     echo("<br>Record found");
   else
     echo("<br>Record not found");

?>
