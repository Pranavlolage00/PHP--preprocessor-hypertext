<html>
  <body>
<form method="GET" action="sumofdigit.php">
enter number :-
<input type="text" name="t1">
 <input type="submit" value="sum">
</form>
  </body>
</html>
   <?php
$n=$_GET["t1"];
$s=0;

while($n>0)
{
  $d=$n%10;
  $a=$a+$d;
  $n=($n/10);

}
echo("sum of digit=".$a);

?>