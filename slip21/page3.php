<?php
    session_start();
  $name=$_SESSION["nm"];
  $class=$_SESSION["cl"];
  $php=$_POST["t1"];
  $clang=$_POST["t2"];
  $se=$_POST["t3"];
  $bd=$_POST["t4"];
  $dm=$_POST["t5"];

  $t=$t+$php+$clang+$se+$bd+$dm;
  $per=$per+$t/5;
  echo"<h1>RESULT</h1>";
  echo"<table border='1' width='50%'>";
  echo"<tr><td>Name:-<td>$name</tr>";
  echo"<tr><td>class:-<td>$class</tr>";
  echo"</table>";
  echo "<table border='1' width='50%'>";
  echo "<tr> <th>Subjects <th>Marks </tr>";
  echo "<tr> <td>Php <td>$php</tr>";
  echo "<tr> <td>C-lang <td>$clang</tr>";
  echo "<tr> <td>softwere engn.<td>$se</tr>";
  echo "<tr> <td>big-data <td>$bd</tr>";
  echo "<tr> <td>Digital marketing<td>$dm</tr>";
  echo "</table>";
  
  echo "<br> Total Marks Obtained:".$t;
  echo "<br> Percentage:".$per;
  
?>