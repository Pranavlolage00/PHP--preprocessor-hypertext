<html>
    <body>
        <form method="POST" action="page2.php">
            Enter Student Name:
            <input type="text" name="t1" value="<?php echo($_POST['t1']); ?>" ><br>
            Enter Programing Language:
            <select name="t2">
                <option value="PHP">PHP</option>
                <option value="DBMS">DBMS</option>
                <option value="C-Lang">C-Lang</option>
                <option value="RDBMS">RDBMS</option>
                <option value="R-Prog">R-Prog</option>              
            </select><br>
            <input type="submit" ><br>
        </form>
    </body>
</html>