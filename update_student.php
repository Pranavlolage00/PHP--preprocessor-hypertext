<html>
    <body>
        <form method="POST" action="#">
            enter rno:
            <br><input type="text" name="t1"><br>
            enter sname to update:
            <input type="text" name="t2"><br>
            enter per to update:
            <br><input type="text" name="t3"><br><br>
            <input type="submit" value="insert"><br>
        </form>
    </body>
</html>
<?php
$con=mysqli_connect("localhost","root","");
   if($con==false)
   {
      die("error in connection database");
   }
   $rno=$_POST["t1"];
   $sname=$_POST["t2"];
   $per=$_POST["t3"];
   mysqli_select_db($con,"sybbaca");
    mysqli_query($con,"update student set sname='$sname',per=$per where rno=$rno");
    $k=mysqli_affected_rows($con);
    if($k>0)
    {
       echo("record updateed..");
    }
    else
    {
        echo"error in query";
    }
    mysqli_close($con);


?>