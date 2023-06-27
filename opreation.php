<html>
   <body>
<form method="POST" action="opreation.php">
enter number 1:-
<input type="text" name="t1"> <br>
enter number 2:-
<input type="text" name="t2"> <br>
<input type="submit" value="ook">
  </form>
</body>
   </html>
<?php
$a=$_POST["t1"];
$b=$_POST["t2"];

$c=$a+$b;
$d=$a-$b;
$e=$a*$b;
$f=$a/$b;

echo("<br>addition=".$c);
echo("<br>substraction=".$d);
echo("<br>multiplication=".$e);
echo("<br>division=".$f);

?>


