<html>
  <body>
<form method="POST" action="reverse.php">
enter number :-
<input type="text" name="t1">
 <input type="submit" value="reverse">
</form>
  </body>
</html>
   <?php
$n=$_POST["t1"];
$r;

while($n>0)
{
  $d=$n%10;
  $r=$r*10+$d;
  $n=(int)($n/10);

}
echo("reverse=".$r);

?>