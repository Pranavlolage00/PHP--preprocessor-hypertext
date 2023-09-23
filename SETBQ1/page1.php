<html>
    <body>
        <form method="POST" action="page2.php">
            enter customer name:
            <input type="text" name="t1" value="<?php echo($_POST['t1']); ?>" ><br>
            enter list of product:<br>
            <input type="text" name="t2" value="<?php echo($_POST['t2']); ?>" size="50"><br>
            enter price:<br>
            <input type="text" name="t3" value="<?php echo($_POST['t3']); ?>"><br>
            enter quentity:<br>
            <input type="text" name="t4" value="<?php echo($_POST['t4']); ?>" size="50"><br>
            <input type="submit" value="next"><br> 

        </form>
    </body>
</html>

