<html>
    <body>
        <form method="POST" action="#">
            SELECT Subjects...
            <select name="c1[]" multiple=multiple>
                <option value="java">JAVA</option>
                <option value="php">Php</option>
                <option value="JS">Js</option>
                <option value=".net">.net</option>
                <option value="c-lang">c-lang</option>
                
            </select>
            <input type="submit"><br>
        </form>
    </body>
</html>
<?php
   $info=$_POST["c1"];
   print_r($info);

?>