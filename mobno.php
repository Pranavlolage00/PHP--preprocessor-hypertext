<html>
    <body>
        <form method="POST" action="<?php if($_SERVER['PHP_SELF']); ?>">
            enter mobile no:
            <input type="text" name="t1" value="<?php echo($_POST['t1']); ?>" ><br>
            <input type="submit" value="NEXT" ><br>
        </form>
    </body>
</html>
<?php
    
   $s1=$_POST['t1'];
   if(filter_var($s1,FILTER_VALIDATE_INT) &&(strlen($s1)==10))
   {
  echo("number is valid ");
   } 
   else
   {
    echo("number is invalid");
   }        
?>