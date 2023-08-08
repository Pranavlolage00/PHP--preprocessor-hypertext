<html>
    <body bgcolor="">
        <form method="GET" action="prog1.php">
            <center>
                <font color="green">
            <h1> COMPARE TWO STRINGS...</h1>        
            enter first string:-
            <input type="text" name="t1"><br>
            enter second string:-
            <input type="text" name="t2"><br>
            <input type="submit" value="ok">
</font>
</center>
        </form>
    </body>
</html>
<?php
   $s1=$_GET["t1"];
   $s2=$_GET["t2"];

   if(strcmp($s1,$s2)==0)
    {
        echo("string are same");
    }
    else
      echo("string are not same..");

?>