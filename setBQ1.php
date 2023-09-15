
<?php
  $s1="shrirampur";
  $s2="bharat";
 $ans=strcmp($s1,$s2);

    if($ans==0)
     echo("string are same");
    if($ans>0)
     echo($s1." is greater than <br>".$s2);
    if($ans<0)
    echo("second string is greater than".$s2);

  $s1=strtoupper($s1);
  $s2=strtolower($s2);

  echo("<br>uppercase string=".$s1);
  echo("<br>lowecase string=".$s2);
?>