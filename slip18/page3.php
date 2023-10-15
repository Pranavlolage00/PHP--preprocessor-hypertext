<?php
session_start();
$us=$_SESSION["un"];
$ps=$_SESSION["ps"];
$nm=$_POST["t1"];
$cty=$_POST["t2"];
$mno=$_POST["t3"];

echo("<br>username=".$us);
echo("<br>password=".$ps);
echo("<br>name=".$nm);
echo("<br>city=".$cty);
echo("<br>mobile number=".$mno);

?>