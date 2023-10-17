<?php
   
   $con=mysqli_connect("localhost","root","");
      if($con==false)
      {
        die("error in connection");
      }
      mysqli_select_db($con,"sybbaca");
      $hn=$_POST["t1"];
      $res=mysqli_query($con,"select doctor.* from doctor,hospital,DH where doctor.doc_no=DH.doc_no and hospital.hosp_no=DH.hosp_no and hosp_name='$hn'");
      echo"<table border='1'>";
      echo"<tr><th>doc_no<th>doc_name<th>address<th>city<th>area</tr>";
      while($row=mysqli_fetch_array($res))
      {
           echo"<tr><td>".$row[0];
           echo"<td>".$row[1];
           echo"<td>".$row[2];
           echo"<td>".$row[3];
           echo"<td>".$row[4];
           echo"</tr>";
      }
      echo"</table>";

      mysqli_close($con);





?>