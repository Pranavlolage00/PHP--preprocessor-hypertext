<?php
session_start();
$_SESSION["nm"]=$_POST["t1"];
$_SESSION["addr"]=$_POST["t2"];
$_SESSION["mno"]=$_POST["t3"];
?>
<html>
   <body>
      <form method="POST" action="page3.php">
        enter product name:
          <input type="text" name="t1"><br>
        enter quentity:
        <input type="text" name="t2"><br>
        enter rate:
        <input type="text" name="t3"><br>
        <input type="submit" value="bill">
      </form>
   </body>
</html>