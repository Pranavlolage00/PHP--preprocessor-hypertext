<html>
   <body>
 <center><font color="green"><h1>sum of even numbers </h1><font><center>
<form method="POST" action="evensum.php">
 enter limit:-
<input type="text" name="t1"><br>
<input type="submit" value="display">
<input type ="reset" value="clear">
 </form>
   </body>
</html>
   <?php
$n=$_POST["t1"];
 $s=0;
   for($i=1; $i<=$n; $i++)
  {
       if($i%2==1)
     {
     $s=$s+$i;
     }
}

echo("sum of all even numbers up to limit=".$s);

   ?>
     
        