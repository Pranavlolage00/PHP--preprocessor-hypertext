<html>
  <body>
 <form method="GET" action="checkadhar.php">
<center>
   <font color="green">
   enter adhar number:
<input type="number" name="t1"><br>
<input type="submit">
  </font>
 </center>
</form>
    </body>
</html>
<?php
 $s=$_GET["t1"];
$p="([0-9]{12})";
 if(ereg($p,$s))
   printf("valid.....");
else
  printf("invalid....");
?>