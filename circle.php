<html>
   <body>
<form method="GET" action="circle.php">
enter radius:-
<input type="text" name="t1">
<input type="submit" value="calculate">
  </form>
</body>
   </html>
<?php
$r=$_GET["t1"];

$a=3.14*$r*$r*$r;

echo("<br> area of circle=".$a);
?>