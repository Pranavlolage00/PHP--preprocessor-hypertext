<html>
    <body>
        <form method="POST" action="<?php echo($_SERVER['PHP_SELF']);?>"> <br>
        enter name: 
        <input type="text" name="t1" value="<?php echo($_POST['t1']); ?>" ><br> 
        enter adddress:
        <textarea name="t2"><?php echo($_POST['t2']); ?></textarea> <br>
        enter pincode:
        <input type="number" name="t3" value="<?php echo($_POST['t3']); ?>"> <br>
        Gender:
        <input type="radio" value="male" <?php if($_POST['r1']=='male') echo 'checked="checked"' ?> name="r1" >male
        <input type="radio" value="female" name="r1" <?php if($_POST['r1']=='female') echo 'checked="checked"' ?> >female
      <input type="submit">
</form>
    </body>
</html>
<?php
     $nm=$_POST['t1'];
     $ad=$_POST['t2'];
     $pc=$_POST['t3'];
     if(!empty($nm)&&!empty($ad)&&!empty($pc))
{
     echo("all print succesfully..");

}
else
{

    echo("all feilds are required");
}



?>