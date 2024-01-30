<?php
  
  class emp
  {
      public $eno,$ename,$sal;
     function __construct($eno,$ename,$sal)
     {
         $this->eno=$eno;
         $this->ename=$ename;
         $this->sal=$sal;
     }
     function disp()
     {
        echo"<br>employe number=".$this->eno;
        echo"<br>employe name=".$this->ename;
        echo"<br>employe salary=".$this->sal;
     }
     function __destruct()
     {
         echo"<br>memory free....!";
     }
  }
  $ob=new emp(101,'om',50000);
  $ob->disp();
?>
