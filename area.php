<html>
   <body>
<form method="POST" action="area.php">
enter length:-
<input type="text" name="t1"> <br>
enter breadth:-
<input type="text" name="t2"> <br>
enter height:-
<input type="text" name="t3"> <br>
<input type="submit" value="calculate">
  </form>
</body>
   </html>
<?php
$l=$_POST["t1"];
$b=$_POST["t2"];
$h=$_POST["t3"];

$a=2*(($l*$b)+($l*$h)+($b*$h));
$v=$l*$b*$h;

echo("<br> volume=".$v);
echo("<br> surface area of cuboid=".$a);
?>