<?php
class college
{
   public $cno,$cname,$addr;

   function acceptc($cno,$cname,$addr)
   {
        $this->cno=$cno;
        $this->cname=$cname;
        $this->addr=$addr;
   }
}
class student extends college
{
    public $sno,$sname,$per;
      function accepts($sno,$sname,$per)
      {
           $this->sno=$sno;
           $this->sname=$sname;
           $this->per=$per;
      }
      function disp()
      {
         echo"<br>college number=".$this->cno;
         echo"<br>college name=".$this->cname;
         echo"<br>college addresss=".$this->addr;
         echo"<br>student number=".$this->sno;
         echo"<br>student name=".$this->sname;
         echo"<br>student percentage=".$this->per;
      }
}
$ob=new student();
$ob->acceptc(0034,"CDJ","shrirampur");
$ob->accepts(1,"om",56.25);
$ob->disp();
?>
