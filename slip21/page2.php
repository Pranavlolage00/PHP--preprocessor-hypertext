<?php
    session_start();
  $_SESSION["nm"]=$_POST["t1"];  
  $_SESSION["cl"]=$_POST["t2"];
?>
<html>
    <body>
        <h1>ENTER 5 SUBJECT MARKS..</h1>
        <form method="POST" action="page3.php">
            enter php marks:
            <input  type="text" name="t1"><br>
            enter  c-lag marks:
            <input  type="text" name="t2"><br>
            enter soft. engee marks :
            <input  type="text" name="t3"><br>
            enter big-data marks:
            <input  type="text" name="t4"><br>
            enter digital marketing marks:
            <input  type="text" name="t5"><br>
            <input type="submit" value="result">    
        </form>
    </body>
</html>