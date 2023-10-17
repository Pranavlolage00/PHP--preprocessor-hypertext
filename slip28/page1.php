<html>
    <body>
        <form method="post"  action="#">
            enter teacher name:
            <input type="text" name="t1"><br>
            <input type="submit">
        </form>
    </body>
</html>
<?php

   $con=mysqli_connect("localhost","root","");
   if($con==false)
   {
     die("error in connection");
   }
    $tn=$_POST["t1"];

    mysqli_select_db($con,"sybbaca");

    $res=mysqli_query($con,"select student.s_name,ST.subject from teacher,student,ST where
    student.sno=ST.sno and teacher.tno=ST.tno
    and t_name='$tn'");

    while($row=mysqli_fetch_array($res))
    {
     echo"<br>student name=".$row[0];
     echo"<br>subject=".$row[1];
    }

     mysqli_close($con);

?>