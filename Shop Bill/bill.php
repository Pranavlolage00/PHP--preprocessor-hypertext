<?php
  echo("<h1><font color='red'> Shri Ram Shop:-</font></h1><hr>");
  echo("<table border=1>");
  echo("<tr><th>Product Name:</th>");
  echo("<th>Quentity</th>");
  echo("<th>Rate</th>");
  echo("<th>Total</th></tr>");
  $s=0;
  if(isset($_POST["c1"]))
  {
     $q=$_POST["t1"];
     $t=$q*40;
     $s=$s+$t;
     echo("<tr><td>Sugar");
     echo("<td>".$q);
     echo("<td>40");
     echo("<td>".$t);
  }
  if(isset($_POST["c2"]))
  {
     $q=$_POST["t2"];
     $t=$q*140;
     $s=$s+$t;
     echo("<tr><td>Oil");
     echo("<td>".$q);
     echo("<td>140");
     echo("<td>".$t);
  }
  if(isset($_POST["c3"]))
  {
     $q=$_POST["t3"];
     $t=$q*100;
     $s=$s+$t;
     echo("<tr><td>camel sago");
     echo("<td>".$q);
     echo("<td>100");
     echo("<td>".$t);
  }
  if(isset($_POST["c4"]))
  {
     $q=$_POST["t4"];
     $t=$q*80;
     $s=$s+$t;
     echo("<tr><td>coconut oil");
     echo("<td>".$q);
     echo("<td>80");
     echo("<td>".$t);
  }
  echo("</table>");
  echo("<br>Total Bill To Paid:-".$s);    








?>