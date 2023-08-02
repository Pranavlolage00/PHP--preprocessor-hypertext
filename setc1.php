<html>
 <body>
<form method="POST" action="setc1.php">
enter string:-
<input type="text" name="t1"><br>
enter find what:-
<input type="text" name="t2"><br>
enter replace with:-
<input type="text" name="t3"><br>
<input type="submit"><br>
</form>
  </body>
</html>

<?php

  $s1=$_POST["t1"];
  $s2=$_POST["t2"];
  $s2=$_POST["t3"];
$s=str_replace($s2,$s3,$s1);
 echo("replace string=".$s);

$s=strrev($s);
 echo("<br>reverse string=".$s);
?>