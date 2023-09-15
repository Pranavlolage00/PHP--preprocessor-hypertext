<html>
    <body bgcolor="purple">
        <form method="post" action="setBQ2.php">
      enter string 1:
      <input type="text" name="t1"><br>
      enter string 2:
      <input type="text" name="t2"><br>
      <input type="submit" value="ok">
        </form>
    </body > 
 </html>

 <?php
   $s1=$_POST["t1"];
   $s2=$_POST["t2"];

   $ans=strpos($s1,$s2);

    if($ans==NULL)
      echo("substring is not found");
    else
     echo("substring found at position ".$ans);
print("<br>");

   $a=strrpos($s1,$s2);

   if($a==NULL)
    echo("substring not found ");
else
echo("substring found at ending position".$a);

    
 ?>
