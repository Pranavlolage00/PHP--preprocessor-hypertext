<?php

class calc
{
    public $a,$b;
    function __construct($a,$b)
    {
        $this->a=$a;
        $this->b=$b;
    }
    function add()
    {
        return $this->a+$this->b;
    }
    function sub()
    {
        return $this->a-$this->b;
    }
    function multi()
    {
        return $this->a*$this->b;
    }
    function div()
    {
        return $this->a/$this->b;
    }

}
  $ob=new calc(45,63);
  echo"<br>additon=".$ob->add();
  echo"<br>subtraction=".$ob->sub();
  echo"<br>multiplication=".$ob->multi();
  echo"<br>division=".$ob->div();
?>