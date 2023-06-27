<html>
 <body/>
 <center><font color="green"><h1>In the case of program.<br>
 calculate square & cube and substract it .....!</h1><font><center>
  <form method="GET" action="unit.php">
Enter Limit :-
<input type="text" name="t1"><br>
<input type="submit" value ="calculate">
<input type="reset" value="clear">
 </form>
</body>
    </html>
<?php
  $n=$_GET["t1"];
    $m=1;
 for($i=21; $i<=$n; $i++)
  {
     $t=$m*$i;
  }  
echo("<br>calculation=".$t);
 
  ?>
