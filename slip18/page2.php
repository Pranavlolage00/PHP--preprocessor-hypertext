<?php

  session_start();
  $_SESSION["un"]=$_POST["t1"];
  $_SESSION["ps"]=$_POST["t2"];
?>
<html>
    <body>
        <h1>information:-</h1>
        <form method="POST" action="page3.php">
            enter name:
           <input type="text" name="t1"><br>
            enter city:
            <input type="text" name="t2"><br>
            enter phone number:
            <input type="text" name="t3"><br>
            <input type="submit" name="next">
        </form>
    </body>
</html>