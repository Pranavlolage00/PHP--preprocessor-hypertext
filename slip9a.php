<html>
    <body>
        <form method="POST" action="#">
            <h1>Calculator</h1>
            enter number 1st:
            <input type="text" name="t1"><br>
            enter number 2nd:
            <input type="text" name="t2"><br>
            <h2>Enter Choice:</h2>
            <input type="radio" name="r1" value="add">1-ADD<br>
            <input type="radio" name="r1" value="sub">2-Subtract<br>
            <input type="radio" name="r1" value="mult">3-Multiplication<br>
            <input type="radio" name="r1" value="div">4-Divide<br>
            <input type="submit" value="Fire">
        </form>
    </body>
</html>
<?php

class Calculator
{
    public $a,$b;

    function __construct($a,$b)
    {
        $this->a=$a;
        $this->b=$b;
    }
    function add()
    {
        $ans=$this->a+$this->b;
        echo"addition=".$ans;   
    }
    function sub()
    {
        $ans=$this->a-$this->b;
        echo"subtraction=".$ans;   
    }
    function mult()
    {
        $ans=$this->a*$this->b;
        echo"multiplication=".$ans;   
    }
    function div()
    {
        $ans=$this->a/$this->b;
        echo"divide=".$ans;   
    }
}
 $a=$_POST["t1"];
 $b=$_POST["t2"];
  $ch=$_POST['r1'];
  $ob=new Calculator($a,$b);
  if($ch=='add')
  {
     $ob->add();
  }
  else if($ch=='sub')
  {
      $ob->sub();
  }
  else if($ch=='mult')
  {
     $ob->mult();
  }
  else if($ch=='div')
  {
     $ob->div();
  }
?>

