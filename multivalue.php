<html>
    <body>
        <form method="POST" action="#">
            Select Subjects:
            <input type="checkbox" name="c1[]" value="java">JAVA<br>
            <input type="checkbox" name="c1[]" value="php">PHP<br>
            <input type="checkbox" name="c1[]" value="cpp">CPP<br>
            <input type="checkbox" name="c1[]" value="c-lang">c-lang <br>
            <input type="submit" value="ok"><br>
        </form>
    </body>
</html>
<?php
 $info=$_POST["c1"];
 print_r($info);

?>