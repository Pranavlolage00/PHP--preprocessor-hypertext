<?php
   $con=mysqli_connect("localhost","root","");
   if($con==false)
   {
     die("error in connection");
   }
    mysqli_select_db($con,"sybbaca");
    $res=mysqli_query($con,"select * from product");
     echo("<table border=1>");
     echo("<tr><th>product no<th>product name<th> price </tr>");
     while($row=mysqli_fetch_array($res))
     {
       echo("<tr><td>".$row[0]);
       echo("<td>".$row[1]);
       echo("<td>".$row[2]);
       echo("</tr>");
     }

     echo("</table>");
     mysqli_close($con);
?>