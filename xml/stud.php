<html>
    <body>
        <form method="POST" action="#">
            enter student name:
            <input type="text" name="t1" value="<?php echo $_POST['t1']; ?>">
            <input type="submit">
        </form>
    </body>
</html>    
<?php
error_reporting(0);                  
 $nm=$_POST["t1"];
 $flag=0;

 $xml=simplexml_load_file("course.xml");
 if(!$xml)
 {
    die("file not found..");
 }
  foreach($xml->sci as $a)
  {
  
  if($a->name==$nm)
  { 
    $flag=1;
    print("record found");
     echo"<br>class name=".$a->class;
     echo"<br>percentage=".$a->per;
  }
  }
    if($flag==0)
     print("record not found");
   

?>