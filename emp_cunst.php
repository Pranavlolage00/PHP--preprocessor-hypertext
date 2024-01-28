<?php
class emp
{
  public $eno,$ename,$sal;
 function accept($eno,$ename,$sal)
  {
      $this->eno=$eno;
      $this->ename=$ename;
      $this->sal=$sal;
  }
    function disp()
  {
    echo"<br>employee number=".$this->eno;
    echo"<br>employee name=".$this->ename;
    echo"<br>employee salary=".$this->sal;
  }
  
}
$ob=new emp();
$ob->accept(101,"om",50000);
$ob->disp();

?> 