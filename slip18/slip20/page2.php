<?php
session_start();
$_SESSION["Wm"]=$_POST["t1"];
$_SESSION["fc"]=$_POST["t2"];
$_SESSION["fs"]=$_POST["t3"];
$_SESSION["bc"]=$_POST["t4"];

echo("welcome message=wa");
?>