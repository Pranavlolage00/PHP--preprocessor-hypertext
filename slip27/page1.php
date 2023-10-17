<html>
    <body>
        <form method="POST" action="#">
            enter project name:
            <input type="text" name="t1"><br>
            <input type="submit" value="display">
        </form>
    </body>
</html>
<?php

 $con=mysqli_connect("localhost","root","");
   if($con==false)
   {
      die("error in connection");
   }
     $pn=$_POST["t1"];
     mysqli_select_db($con,"sybbaca");
     $res=mysqli_query($con,"select employee.* from employee,project,PE where project.pno=PE.pno
     and employee.eno=PE.eno and
     p_name='$pn'");

    echo"<table border='1'>";
    echo"<tr><th>eno<th>e_name<th>qulification<th>joindate</tr>";
     while($row=mysqli_fetch_array($res))
     {
         echo"<tr><td>".$row[0];
         echo"<td>".$row[1];
         echo"<td>".$row[2];
         echo"<td>".$row[3];
         echo"</tr>";
     }

     echo"</table>";

     mysqli_close($con);

?>