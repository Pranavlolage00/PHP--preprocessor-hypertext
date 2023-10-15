<html>
    <body>
        <h1>Electricity Bill..</h1>
        <form method="POST" action="#">
            Enter Customer Name:
            <input  type="text" name="t1"><br>
            Enter Consumer Number:
            <input type="text" name="t2"><br>
            Enter Number of Electricty units:
             <input type="text" name="t3"><br>
             <input type="submit" value=" view bill">
        </form>
    </body>
</html>
<?php
$cn=$_POST["t1"];
$cnum=$_POST["t2"];
$un=$_POST["t3"];

$t=150;

if($un<=50)
    $t=$t+$un*3.5;

elseif($un>50&& $un<=150)
    $t=$t+$un*4;

elseif($un>150 && $un<=250)
    $t=$t+$un*5.2;

elseif($un>250)
  $t=$t+$un*6.5;

  echo("<h1>BILL..</h1>");
 echo"customer name=".$cn;
 echo"<br>consumer number=".$cnum;
 echo"<br>number of electricity units=".$un;
 echo"<br>TOTAL BILL=".$t;

?>
