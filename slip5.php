<html>
    <body>
        <form method="POST" action="#">
            enter item code:
            <input type="text" name="t1"><br><br>
            enter item name:
            <input type="text" name="t2"><br><br>
            enter units sold:
            <input type="text" name="t3"><br><br>
            enter Rate:
            <input type="text" name="t4"><br><br>
            <input type="submit"><br><br>
        </form>
    </body>
</html>
<?php
$ic=$_POST["t1"];
$in=$_POST["t2"];
$us=$_POST["t3"];
$r=$_POST["t4"];

$a=explode(" ",$in);
$b=explode(" ",$us);
$c=explode(" ",$r);

echo("<table border='1'>");
echo("<tr><th>Sr.No");
echo("<th>item name");
echo("<th>Quentity");
echo("<th>Rate");
echo("<th>total");
echo("</tr>");
$t=0;
for($i=0; $i<count($a); $i++)
{
    echo("<tr><td>".($i+1));
    echo("<td>".$a[$i]);
    echo("<td>".$b[$i]);
    echo("<td>".$c[$i]);
    echo("<td>".$b[$i]*$c[$i]);
    echo("</tr>");
    $t=$t+$b[$i]*$c[$i];
}
echo("<tr>");
echo("<th colspan='5'>TOTAL BILL=".$t);
echo("</table>");
?>