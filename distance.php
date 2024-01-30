<html>
    <body>
      <font color="gren"> <h1>Select Option</h1></font>
        <form method="POST" action="#">
            <input type="radio" name="r1" value="i">convert feet to inches<br>
            <input type="radio" name="r1" value="f">convert inches to feet<br>
           enter value:
           <input type="text" name="t1"><br>
           <input type="submit"><br>
        </form>
    </body>
</html>
<?php
  class distance
  {
     public $feet,$inches;

    function convert_f_i($val)
    {
        $inches=$val*12;
        echo"inches=".$inches;
    }
    function convert_i_f($val)
    {
       $feet=$val/12; 
       echo"feet=".$feet;
    }
  }
  $ch=$_POST["r1"];
  $val=$_POST["t1"];
 $ob=new distance();
  if($ch=="f")
  {
      $ob->convert_i_f($val);
  }
  if($ch=="i")
  {
      $ob->convert_f_i($val);
  }
?>