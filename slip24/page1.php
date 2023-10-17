<?php
   session_start();
 $_SESSION["us"]=$_POST["t1"];
 $_SESSION["pw"]=$_POST["t2"];
 $_SESSION["cnt"]=$_POST["cnt"];
?>
<html>
    <body>
        <form method="POST" action="page2.php">
            enter username:
            <input type="text" name="t1"><br>
            enter password:
            <input type="password" name="t2"><br>
            <input type="submit" value="Login" name="cnt">
        </form>
    </body>
</html>
 


