<?php
$con=$mysqli_connect("localhost","root","");

if($con==false)
{
    die("connection in error");
}
$nm=$_POST["s1"];

mysqli_select_db($con,"cdj");
$res=mysqli_query($con,"select * from student where sname='$nm' order by(standard)");

while($row=mysqli_fetch_array($res))
{
    echo"Student number=".$row['sno'];
    echo"Student name=".$row['sname'];
    echo"Student standard=".$row['standard'];
    echo"Student marks=".$row['marks'];
    echo"Student percentage=".$row['per'];
}

mysqli_close($con);

?>