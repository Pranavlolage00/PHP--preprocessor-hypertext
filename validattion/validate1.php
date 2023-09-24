<html>
    <body>
        <form method="POST" action="validate2.php">
          <font color="green">
          Enter username:
          <input type="text" name="t1" value="<?php echo($_POST['t1']); ?>"><br>
          Enter email:
          <input type="text" name="t2" value="<?php echo($_POST['t2']); ?>" ><br>
          Enter age:
          <input type="text" name="t3" value="<?php echo($_POST['t3']); ?>"><br>  
          <input type="submit"><br>
              </font>
        </form>
    </body>
</html>
