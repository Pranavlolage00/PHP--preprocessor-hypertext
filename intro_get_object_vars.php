<?php

    class dept
    {
         public $dno,$dname,$addr;
         function accept($dno,$dname,$addr)
         {
            $this->dno=$dno;
            $this->dname=$dname;
            $this->addr=$addr;
         }
    }
    class employee extends dept
    {
        public $eno,$ename,$sal;
        function accepte($eno,$ename,$sal)
        {
             $this->eno=$eno;
             $this->ename=$ename;
             $this->sal=$sal;
        }
        function disp()
        {
            echo"<br>department number=".$this->dno;
            echo"<br>department name=".$this->dname;
            echo"<br>department address=".$this->addr;
            echo"<br>employeee number=".$this->eno;
            echo"<br>employee name=".$this->ename;
            echo"<br>employee salary=".$this->sal;
        }
    }
    $ob=new employee();
    $ob->accept(101,"computer","shrirampur");
    $ob->accepte(1,"om",451000);
    $ob->disp();
      if(method_exists($ob,"accept"))
        echo"<br><br>method found";
     else
         echo"<br><br>method not found";

     $a=get_object_vars($ob);
        echo"<br> variables=";
        print_r($a);
?>