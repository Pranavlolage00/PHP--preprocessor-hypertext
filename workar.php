<?php
class workar
{
  public $w_name,$no_of_days,$rate,$sal;

  function __construct($w_name,$n,$rate)
  {
      $this->w_name=$w_name;
      $this->no_of_days=$n;
      $this->rate=$rate;
  }
  function calc()
  {
      $this->sal=$this->no_of_days*$this->rate;
  }
  function disp()
  {
      echo"<br>worker name=".$this->w_name;
      echo"<br> number of days=".$this->no_of_days;
      echo"<br> pay rate=".$this->rate;
      echo"<br>total salary=".$this->sal;
  }
}
  $ob=new workar("om",45,500);
  $ob->calc();
  $ob->disp();
?>