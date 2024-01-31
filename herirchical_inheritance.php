<?php
  
  class shape
  {
     public $r,$b,$h,$s,$at,$ac,$as;
       function accept($r,$b,$h,$s)
       {
                $this->r=$r;
                $this->b=$b;
                $this->h=$h;
                $this->s=$s;
       }
  }
  class area extends shape
  {
      function area_circle()
      {
         $this->ac=3.14*$this->r*$this->r;
         echo"<br>area of circle=".$this->ac;
      } 
      function area_square()
      {
          $this->as=$this->s*$this->s;
          echo"<br>area of square=".$this->as;
      }
      function area_triangle()
      {
          $this->at=0.5*$this->b*$this->h;
          echo"<br>area of triangle=".$this->at;
      }
  }
  $ob=new area();
  $ob->accept(3.5,5.2,8,4);
  $ob->area_circle();
  $ob->area_square();
  $ob->area_triangle();
?>