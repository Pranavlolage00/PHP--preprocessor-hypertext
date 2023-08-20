<html>
    <body> 
      <form method="post" action="fact.php">
  enter number to calculate factorial of number:-
<input type="text" name="t1"><br>
 <input type="submit" value="calculate">
      </form>
   </body>
</html>
<?php

  $n=$_POST["t1"];
$f=1;

for($i=1; $i<=$n; $i++)
 {

     $f=$f*$i;
 }
   echo("<br>factorial of number:-".$f);


?>

   