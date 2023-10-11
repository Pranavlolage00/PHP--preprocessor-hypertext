<html>
    <body>
        <form method="POST" action="#">
            enter first number:
            <input type="text" name="t1"><br><br>
            enter second number:
            <input type="text" name="t2"><br>
            <h3>Perform Any opration..</h3>
            <input type="radio" name="r1" value="add">&nbsp;1-Addition<br>
            <input type="radio" name="r1" value="sub">&nbsp;2-Substraction<br>
            <input type="radio" name="r1" value="mult">&nbsp;3-Multiplication<br>
            <input type="radio" name="r1" value="div">&nbsp;4-Division<br><br>
            <input type="submit"><br>
        </form>
    </body>
</html>
<?php

$a=$_POST["t1"];
$b=$_POST["t2"];
$ch=$_POST["r1"];

function addition($a,$b)
{
    echo("addition=".$a+$b);
}
function subtraction($a,$b)
{
    echo("subtraction=".$a-$b);
}
function multiplication($a,$b)
{
    echo("multiplication=".$a*$b);
}
function division($a,$b)
{
    echo("division=".$a/$b);
}

switch($ch)
{
   case 'add':addition($a,$b);
   break;
   case 'sub':subtraction($a,$b);
   break;
   case 'mult':multiplication($a,$b);
   break;
   case 'div':division($a,$b);
   break;
}

?>