<html>
 <body>
<form method="POST" action="table.php">
<font color="red"><h1 align="center">multiplication tables </h1> </font>
enter number from start:-
<input type="text" name="t1"><br>
enter number to END:-
<input type="text" name="t2">
<input type="submit" value="print">
<input type="reset" value="clear">
  </form>
</body>
   </html>
<?php
$a=$_POST["t1"];
$b=$_POST["t2"];

for($i=1;$i<=10;$i++)
  {
    for($j=$a; $j<=$b; $j++)
     {
         echo("                      ".$i*$j);
     }
       echo("<br>");
  }

?>