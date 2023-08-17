<?php
    $a=array(92,12,84,64,16,25,12);
  $b=array_filter($a,"check_num");
   print_r($b);

 function check_num($num)
{
   if($num%2==0)
{
   return true;
}
 else
  return false;

}

?>