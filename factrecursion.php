<html>
   <body>
     <form method="post" action="factrecursion.php">
 enter number:-
<input type="text" name="t1"><br>
  <input type="submit">
     </form>
  </body> 
</html>
<?php  
function factorial($n)
 {
    if ($n<=1) 
      {
        return 1;
      } 
    else
      {

        return $n*factorial($n-1);
      }
}
$num=$_POST["t1"];
$res=factorial($num);
echo("Factorial of $num is $res");
?>