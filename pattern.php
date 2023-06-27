<html>
  <body>
 <form method="POST" action="pattern.php">
 <font color="orange"><h1>Pattern :-</h1> </font>
enter limit :-
<input type="text" name="t1" >
 <input type="submit" value="print">
</form>
   </body>
</html
    <?php
$n=$_POST["t1"];
 
for($i=1; $i<=$n; $i++)
{
   for($j=1; $j<$i; $j++)
     {
        echo("*"); 
     }

 echo("<br>");
}   

 ?>