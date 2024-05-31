<html>
    <body>
        <form method="POST" action="#">
            enter 1st number:
            <input type="text" name="t1"><br>
            enter 2nd number:
            <input type="text" name="t2"><br>
            <input type="radio" name="r1" value="1">1-Addition<br>
            <input type="radio" name="r1" value="2">2-subtract<br>
            <input type="radio" name="r1" value="3">3-multiplication<br>
            <input type="radio" name="r1" value="4">4-dividion<br>
            <input type="submit"><br>
        </form>
    </body>
</html>
<?php
error_reporting(0);
class calc
{
  public function add($a,$b)
  {
    $ans=$a+$b;
    echo"addition=".$ans;
  }
  public function sub($a,$b)
  {
    $ans=$a-$b;
    echo"subtraction=".$ans;
  }
  public function mult($a,$b)
  {
    $ans=$a*$b;
    echo"multiplication=".$ans;
  }
  public function div($a,$b)
  {
    $ans=$a-$b;
    echo"division=".$ans;
  }
}
$a=$_POST["t1"];
$b=$_POST["t2"];
$ch=$_POST["r1"];
$ob=new calc();
switch($ch)
{
    case '1':$ob->add($a,$b);
             break;
    case '2':$ob->sub($a,$b);
             break;
    case '3':$ob->mult($a,$b);
             break;
    case '4':$ob->div($a,$b);
             break;
}
?>