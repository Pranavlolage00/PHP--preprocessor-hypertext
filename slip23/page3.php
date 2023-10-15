<?php
 session_start();
$nm=$_SESSION["nm"];
$addr=$_SESSION["addr"];
$mno=$_SESSION["mno"];
$r=$_POST["t2"];
$qty=$_POST["t3"];
$pn=$_POST["t1"];

$pn=explode(" ",$pn);
$qty=explode(" ",$qty);
$r=explode(" ",$r);

$t=0;

echo"<br>NAME=".$nm;
echo"<br>address".$addr;
echo"<br>phone number:".$mno;
echo"<table border='1'>";
echo"<tr><th>product name:";
echo"<th>Quentity";
echo"<th>rate";
echo"<th> total </tr>";
for($i=0; $i<count($pn); $i++)
{
    echo"<tr><td>".$pn[$i];
    echo"<td>".$qty[$i];
    echo"<td>".$r[$i];
    echo"<td>".$r[$i]*$qty[$i];
    echo"</tr>";

    $t=$t+$r[$i]*$qty[$i];
 
}
 echo"<tr><td colspan='4'> TOTAL BILL=".$t;
echo"</table>";

?>