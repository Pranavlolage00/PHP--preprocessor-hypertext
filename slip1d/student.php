<html>
    <body>
        <form method="POST" action="#">
            enter course-Name:
            <input type="text" name="t1"><br>
            <input type="submit"><br>
        </form>
    </body>
</html>
<?php
error_reporting(0);
$xml=simplexml_load_file("student.xml");
  if(!$xml)
  {
    die("file not found");
  }
  $nm=$_POST["t1"];
  echo"<table border='1'><tr>";
  echo"<th>Rno</th><th>Sname</th><th>Address</th><th>Collage</th></tr>";
   foreach($xml->stud as $a)
   {
     if($nm==$a->course)
      {
          echo"<tr><td>".$a->rno;
          echo"<td>".$a->sname;
          echo"<td>".$a->address;
          echo"<td>".$a->collage."</tr>";
          
      }
   }


?>