<html>
    <body>
        <form method="POST" action="#">
            Enter Student Name:
            <input type="text" name="t1"><br>
            Select course:
            <select name="t2"><br>
                <option>BBACA</option>
                <option>BSC</option>
                <option>BCS</option>
                <option>MCA</option>
            </select><br>
        enter mobile number:
        <input type="text" name="t3"><br>
        <input type="submit">
        </form>
    </body>
</html>
<?php
 $nm=$_POST["t1"];
 $crs=$_POST["t2"];
 $num=$_POST["t3"];
$flag=0;

 if(!empty($nm) && ctype_alpha($nm))
    $flag++;

 if(filter_var($num,FILTER_VALIDATE_INT) && strlen($num)==10)
    $flag++;

 if($flag==2)
 {
    echo("<br>Student Name=".$nm);
    echo("<br>course=".$crs);
    echo"<br>mobile number=".$num;
    echo("<br>Registration id=".$nm[1].$nm[2].$num);
 }
 else
{
    echo"invalid information...";
}
?>