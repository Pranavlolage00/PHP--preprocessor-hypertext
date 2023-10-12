<html>
    <body>
    <h3>Perform Following Opreation..</h3>
        <h4>Enter Your Choice..</h4>
        <form method="POST" action="#">
        <input type="radio" name="r1" value="1">&nbsp;
        1-Sort the array by values in ascending, descending order.<br>
        <input type="radio" name="r1" value="2">&nbsp;
        2-Also sort the array by values without changing the keys.<br>
        <input type="radio" name="r1" value="3">&nbsp;
        3-Filter the odd elements from an array..<br>
        <input type="radio" name="r1" value="4">&nbsp;
        4-Merge the given arrays..<br>
        <input type="radio" name="r1" value="5">&nbsp; 
        5-Find the Union, intersection& set difference of two arrays<br><br>
        <input type="submit"><br>
        </form>
    </body>
</html>
<?php
  $ch=$_POST["r1"];
  $a=array("a"=>"10","b"=>"20","c"=>"70","d"=>"48");
  $b=array(10,20,30,40,55,88,99,44);
  $c=array(11,22,33,44,55,66,77,88);

  switch($ch)
  {
    case '1':echo("ascending order=");
             sort($a);
              print_r($a);
             echo("<br>");
             echo"descending order=";
             rsort($a);
        print_r($a);
         break;
    case '2': echo"ascending order=";
              asort($a);
              print_r($a);
              echo"<br>";
              echo"descending order";
              arsort($a);
              print_r($a);
              break;
    case '3': $t=array_filter($b,"odd_num");
              print_r($t);
              break;
    case '4': echo"merged two array";
              $a=array_merge($b,$c);
              print_r($a);
              break;
    case '5': echo"union and intersection=<br>";
              $t=array_merge($b,$c);
              echo"union of two arrays=<br>";
              $t=array_unique($t);
              print_r($t);
              echo"<br>";
              echo"intersection of two arrays=<br>";
              $res=array_intersect($t);
              print_r($res);
              echo"<br>";
              echo"differnce of two array..<br>";
              $temp=array_diff($b,$c);
              print_r($temp);
              break;           
  }

  function odd_num($n)
  {
    if($n%2==1)
      return true;
    else
      return false;
  }

?>