<html>
    <body>
        <form method="POST" action="#">
            enter number:
            <input type="text" name="t1"><br>
            <input type="submit" name="b1" value="palindrome">
            <input type="submit" name="b1" value="reverse">
        </form>
    </body>
</html>
<?php
 function rev($n)
  {
    $rev=0;
     while((int)$n>0)
     {
        $d=$n%10;
        $rev=(int)$rev*10+$d;
        $n=$n/10;
     } 
     return $rev;    
  }
  $b=$_POST["b1"];
  if($b=="palindrome")
  {
    $n=(int)$_POST["t1"];
     $num=(int)rev($n);
     if($num==$n)
       echo"number is palindrome";
     else
        echo"number is not palindrome";
  }
  if($b=="reverse")
  {
    $n=$_POST["t1"];
     $rev=rev($n);
     echo"reverse number=".$rev;
  }

?>