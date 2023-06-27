<html>
  <body>
<form method="GET" action="temp.php">
enter temp in celcius:-
<input type="text" name="t1"> <br>
<input type="submit" value="convert" >
</form>
   </body>
</html>
  <?php
$c=$_GET["t1"];
 $f=$c*9/5+32;

echo("celcius to farenheit=".$f);
?>
