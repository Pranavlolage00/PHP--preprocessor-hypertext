<html>
   <body>
<form method="POST" action="maximum.php">
enter number 1:-
<input type="text" name="t1"> <br>
enter number 2:-
<input type="text" name="t2"> <br>
<input type="submit" value="MAX">
  </form>
</body>
   </html>
<?php
$a=$_POST["t1"];
$b=$_POST["t2"];

$a>$b?$m=$a:$m=$b;

echo("maximum=".$m);