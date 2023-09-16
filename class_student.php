<?php
 class student
 {
    public $rno,$sname,$per;
    function accept($rno,$sname,$per)
    {
        $this->rno=$rno;
        $this->sname=$sname;
        $this->per=$per;
    }
    function disp()
    {
       echo("<br> student rno=".$this->rno);
       echo("<br> student name=".$this->sname);
       echo("<br> student per=".$this->per);
    }
 }
 $ob=new student();
 $ob->accept(101,"PRANAV",92.22);
 $ob->disp();
?>