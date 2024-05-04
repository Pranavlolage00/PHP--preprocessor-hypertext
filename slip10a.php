<?php
   class demo
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
              echo"<br>employee number=".$this->eno;
              echo"<br>employee name=".$this->ename;
              echo"<br>employee salary=".$this->sal;
         }
   }
    $ob=new demo(101,'aniket',50000);
    if(is_object($ob))
      echo"object found...";
    else
       echo"object not found...";

  $ans=get_object_vars($ob);
    print_r($ans);
  $a=get_class($ob);
    print_r($a);

?>