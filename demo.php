<html>
 <body>
 <center><font color="green"><h1>In the case of program.<br>
 calculate square & cube and substract it .....!</h1><font><center>
  <form method="GET" action="demo.php">
Enter Limit :-
<input type="text" name="t1"><br>
<input type="submit" value ="calculate">
<input type="reset" value="clear">
 </form>
</body>
    </html>
<?php
  $n=$_GET["t1"];
  $s=0;
$c=0;
for($i=1; $i<=$n; $i++)
    {
       $s=$s+$i*$i;
       $c=$c+$i*$i*$i;
    }

echo("<br>sum of square of that number=".$s);
echo("<br>sum of cube of that number=".$c);
   $ans=$s-$c;
 echo("<br>substraction bettween square and cube=".$ans);
?>



