<?php
  $con=mysqli_connect("localhost","root","");
  if($con==false)
  {
     die("error in conection...");
  }
    mysqli_select_db($con,"sybbaca");
    $k=mysqli_query($con,"create table employee(eno int primary key,
    ename varchar(20),
    addr varchar(20),
    join_date date,
    sal float)");
    if($k==true)
    {
        echo("table created");
    }
    else
    {
        echo("table already exist..");
    }
    mysqli_close($con);
    ?>