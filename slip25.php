<html>
    <body>
        <form method="POST" action="#">
            enter emp number:
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
 $emp_no=$_POST["t1"];
 mysqli_select_db($con,"sybbaca");
 $res=mysqli_query($con,"select emp.emp_name,emp.address,emp.phone,salary.basic,salary.HR,salary.TA,salary.DA from emp,salary where emp.emp_no=salary.emp_no and salary.emp_no=101;");
 if($row=mysqli_fetch_array($res))
 {
     echo"<br>emp_name=".$row[0];
     echo"<br>emp_address=".$row[1];
     echo"<br>emp_phone=".$row[2];
     echo"<br>emp_basic=".$row[3];
     echo"<br>emp_HR=".$row[4];
     echo"<br>emp_TA=".$row[5];
     echo"<br>emp_DA=".$row[6];
 }
 else
 {
    echo"record not found";
 }

 mysqli_close($con);

?>