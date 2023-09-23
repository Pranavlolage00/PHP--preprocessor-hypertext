<html>
    <body>
       <font color="green"><h2> Employee Details: </h2></font>
        <form method="POST" action="page1.php">
            enter employee name:
            <input type="text" name="t1" value="<?php echo($_POST['t1']); ?>" ><br>
            enter address:
            <input type="text" name="t2" value="<?php echo($_POST['t2']) ?>"<br><hr>
         <font color="green" ><h2> Earnining Details:</h2></font>
         BASIC:
         <input type="text" value="<?php echo($_POST['t3']); ?>" name="t3"><br>
         DA:
         <input type="text" value="<?php echo($_POST['t4']); ?>" name="t4"><br>
         HRA:
         <input type="text" value="<?php echo($_POST['t5']); ?>" name="t5"><br>
         <input type="submit" ><br>
           
         </form>

    </body>
</html>
<?php
error_reporting(0);

$ename=$_POST["t1"];
$eaddr=$_POST["t2"];
$esal=$_POST["t3"];
$da=$_POST["t4"];
$hra=$_POST["t5"];
$t=$esal+$da+$hra;
echo("<br>employee name=".$ename);
echo("<br>employee address=".$eaddr);
echo("<br>employee basic=".$esal);
echo("<br>employee DA=".$da);
echo("<br>employee HRA=".$hra);
echo("<br>employee total salary=".$t);

?>