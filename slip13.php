<html>
    <body>
        <h2>CONVERTER</h2>
        <form method="POST" action="#">
            enter distance:
            <input type="text" name="t1"><br>
            <input type="radio" name="r1" value="1">:Miles convert to KILO METER<br>
            <input type="radio" name="r1" value="2">KILO METER Convert to Miles<br>
            <input type="submit">&nbsp;<input type="reset"><br>
        </form>
    </body>
</html>
<?php
$dist=$_POST["t1"];
$ch=$_POST["r1"];

if($ch==='1')
{
    $a=$dist*1.6;
    echo("Miles convert to KILO METER<br>".$a);
}
elseif($ch==='2')
{
    $a=$dist/1.6;
    echo"KILO METER Convert to Miles".$a;
}
?>