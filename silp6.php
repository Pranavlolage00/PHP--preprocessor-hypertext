<html>
    <body>
        <form method="POST" action="#">
            enter first string:
            <input type="text" name="t1"><br><br>
            enter second string:
            <input type="text" name="t2"><br><br>
            enter position to reverse:
            <input type="text" name="t3"><br><br>
            <input type="radio" name="r1" value="1">1-Compare<br>
            <input type="radio" name="r1" value="2">2-Append<br>
            <input type="radio" name="r1" value="3">3-string reverse<br>
            <input type="submit" ><br>
        </form>
    </body>
</html>
<?php
$s1=$_POST["t1"];
$s2=$_POST["t2"];
$pos=$_POST["t3"];
$ch=$_POST["r1"];

switch($ch)
{
   case '1':if($s1==$s2)
                echo("string are equal..");
            else
                echo"string are not equal;";
                break;
    case '2':echo("append=".$s1.$s2);
             break;
    case '3':$len=strlen($s1)-$pos;
             $s3=substr($s1,$pos,$len);
             $s3=strrev($s3);
             echo("revrese string=".$s3);
             break;
}

?>