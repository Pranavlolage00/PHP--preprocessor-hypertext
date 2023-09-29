<html>
    <body>
        <form method="POST" action="#">
            enter rno:
            <input type="text" name="t1"><br>
            enter sname:
            <input type="text" name="t2"><br>
            enter per:
            <input type="text" name="t3"><br>
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
    $k=mysqli_query($con,"insert into student values($rno,'$sname',$per)");
    if($k==true)
    {
       echo("record inserted..");
    }
    else
    {
        echo"error in query";
    }
    mysqli_close($con);


?>