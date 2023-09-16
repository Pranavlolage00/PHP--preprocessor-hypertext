<?php
 class emp 
 {
    public $eno,$ename,$esal;
    function accept($eno,$ename,$esal)
    {
      $this->eno=$eno;
      $this->ename=$ename;
      $this->esal=$esal; 
    }
    function display()
    {
       echo("<br>emp no=".$this->eno);
       echo("<br>emp name=".$this->ename);
       echo("<br>emp salary=".$this->esal);
    }
 }
 $ob=new emp();
 $ob->accept(101,"om",50000);
 $ob->display();
?>