<?php
$con=mysqli_connect("localhost","root","");
   if($con==false)
   {
      die("error in connection database");
   }
   mysqli_select_db($con,"sybbaca");
    $k=mysqli_query($con,"create table student(rno int primary key,
    sname varchar(20),
    per float)");
    if($k==true)
    {
       echo("table created..");
    }
    else
    {
        echo"table alredy exist..";
    }
    mysqli_close($con);


?>