<html>
    <body>
            <h3>Perform Following Opreation..</h3>
            <h4>Enter Your Choice..</h4>
      <form method="POST" action="#">
        <input type="radio" name="r1" value="1">&nbsp;
        1-Display the elements of an array along with the keys.<br>
        <input type="radio" name="r1" value="2">&nbsp;
        2-Display the size of an array.<br>
        <input type="radio" name="r1" value="3">&nbsp;
        3-Delete an element from an array from the given index.<br>
        <input type="radio" name="r1" value="4">&nbsp;
        4-Reverse the order of each element’s key-value pair.<br>
        <input type="radio" name="r1" value="5">&nbsp; 
        5-Traverse the elements in an array in random order<br><br>
        <input type="submit"><br>
      </form>
  </body>
</html>
<?php
  $ch=$_POST["r1"];
  $a=array("rno"=>"101","sname"=>"RAM","per"=>"45.66");
  switch($ch)
  {
     
    case '1':echo("display elements=<br>");
             print_r($a);
             break;
    case '2':echo("size of array=".count($a));
             break;
    case '3':unset($a['rno']);
             print_r($a);
             break;
    case '4': $a=array_flip($a);
            echo"revrese order of each element=<br>";
              print_r($a);
              break;
    case '5':shuffle($a);
             echo("traverse the elements in randome order=<br>");
             print_r($a);
             break;

        

  }
?>