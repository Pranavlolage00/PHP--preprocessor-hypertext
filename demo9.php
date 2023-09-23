<html>
    <body>
        <form method="POST" action="<?php echo($_SERVER['PHP_SELF']); ?>">
           enter number1:
           <input type="text" name="t1" value="<?php echo($_POST['t1']);?>"> <br>
           enter number2:
           <input type="text" name="t2" value="<?php echo($_POST['t2']);?>"> <br>
           <input type="submit" value="ok"> <br>
    </foprm>
    </body>
</html>
<?php 
   if(isset($_POST['t1'])&&isset($_POST['t2']))
   {
      $a=$_POST["t1"];
      $b=$_POST["t2"];

      $c=$a+$b;

      echo("AdDition=".$c);
   }
   else
   {
       echo"all feilds are reqiered";
   }
?>