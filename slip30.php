<html>
    <body>
        <form method="POST" action="#">
            enter competition name:
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
   $cn=$_POST["t1"];

   mysqli_select_db($con,"sybbaca");
   $res=mysqli_query($con,"select student.* from student,competition,SC where
    student.stud_id=SC.stud_id and competition.c_no=SC.c_no and c_name='$cn' and SC.rank='1st';
   ");
   while($row=mysqli_fetch_array($res))
     {
        echo"<br>student id=".$row[0];
        echo"<br>student name=".$row[1];
        echo"<br>student class=".$row[2];
     }

     mysqli_close($con);

?>