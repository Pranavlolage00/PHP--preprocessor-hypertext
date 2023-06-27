<html>
  <body>
<form method="POST" action="result.php">
 enter Data Structure marks :-
<input type="text" name="t1"><br>
enter digital marketing marks :-
<input type="text" name="t2"><br>
enter php marks:-
<input type="text" name="t3"><br>
enter softwere Eng :-
<input type="text" name="t4"><br>
enter big data :-
<input type="text" name="t5"><br>
<input type="submit" value="calculate">
<input type="reset" value="clear">
   </form>
 </body>
   </html>
<?php
$m1=$_POST["t1"];
$m2=$_POST["t2"];
$m3=$_POST["t3"];
$m4=$_POST["t4"];
$m5=$_POST["t5"];

$t=$m1+$m2+$m3+$m4+$m5;
$p=$t/5;
echo("<br>total marks=".$t);
echo("<br>percentage=".$p);
?>


