<?php

  $con=mysqli_connect("localhost","root","");
if($con==false)
{
    die("error in connection");
}
// $tn=$_POST["t1"];
$tn=$_POST["t1"];
 mysqli_select_db($con,"cdj");
 $res=mysqli_query($con,"select * from teacher where tname='$tn'");
while($row=mysqli_fetch_array($res))
{
     echo"<br>teacher number=".$row["tno"];
     echo"<br>teacher qulification=".$row["qul"];
     echo"<br>teacher salary=".$row['sal'];
}
mysqli_close($con);

?>