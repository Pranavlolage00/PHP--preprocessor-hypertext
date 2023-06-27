<html>
  <body>
<form method="POST" action="add.php">
 enetr number1
<input type="text" name="t1"><br>
 enter number2
<input type="text" name="t2"><br>
<input type="submit" value="add">
    </form>
</body>
   </html>
<?php
  $a=$_POST["t1"];
 $b=$_POST["t2"];
 $c=$a+$b;
echo("addition=".$c);

?>