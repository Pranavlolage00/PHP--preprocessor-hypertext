<html>
   <body>
<center><font color="green"> <h1> Array Sorting functions with examples :-
  </font>
</center>
</body>
  </html>
    <?php
    $a=array("om"=>"70","sai"=>"90","ram"=>"45","sham"=>"75","aman"=>"48");
sort($a);
echo("<br>1-sort function value sort in ascending order and not maintain key..<br> eg:-<br>");
      print_r($a);
echo("<br>");
$b=array("om"=>"70","sai"=>"90","ram"=>"45","sham"=>"75","aman"=>"48");
asort($b);
echo("<br>2-asort function value sort in ascending order and maintain key..<br> eg:-<br>");
      print_r($b);
echo("<br>");
$c=array("om"=>"70","sai"=>"90","ram"=>"45","sham"=>"75","aman"=>"48");
arsort($c);
echo("<br>3-arsort function value sort in descending order and maintain key..<br> eg:-<br>");
      print_r($c);
echo("<br>");
$d=array("om"=>"70","sai"=>"90","ram"=>"45","sham"=>"75","aman"=>"48");
rsort($d);
echo("<br>4-rsort function value sort in descending order and not maintain key..<br> eg:-<br>");
      print_r($d);
echo("<br>");
$e=array("om"=>"70","sai"=>"90","ram"=>"45","sham"=>"75","aman"=>"48");
ksort($e);
echo("<br>5-ksort function key sort in ascending order..<br> eg:-<br>");
      print_r($e);
echo("<br>");
$f=array("om"=>"70","sai"=>"90","ram"=>"45","sham"=>"75","aman"=>"48");
krsort($f);
echo("<br>6-krsort function key sort in descending order..<br> eg:-<br>");
      print_r($f);

?>

   