<html>
    <body>
        <form method="POST" action="#">
            <H1>Select Shape to Diplay area</H1>
            <select name="b1">
                <option value="triangle">Traingle</option>
                <option value="square">Square</option>
                <option value="circle">Circle</option>
            </select>
            <input type="submit" ><br>
        </form>
    </body>
</html>
<?php
   class shape
   {
      public $b,$h,$r,$s;
       function __construct($b,$h,$r,$s)
       {
          $this->b=$b;
          $this->s=$s;
          $this->h=$h;
          $this->r=$r;
       }   
   }
   class triangle extends shape
   {
       function areat()
       {
          $a=0.5*$this->b*$this->h;
          echo"<br>area of traingle=".$a;
       }
   }
   class square extends triangle
   {
      function areas()
      {
            $a=$this->s*$this->s;
            echo"<br>area of square=".$a;
      }
   }
   class circle extends square
   {
        function areac()
        {
            $a=3.14*$this->r*$this->r;
            echo"area of circle".$a;
        }   
   }
   $ch=$_POST["b1"];
     $ob=new circle(2.3,5.6,3.5,5);
     if($ch=='triangle')
         $ob->areat();
     else if($ch=='circle')
         $ob->areac();
    else if($ch=='square')
         $ob->areas();
?>