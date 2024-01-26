<?php
  
  $xml=new DomDocument();
  $xml->load("course.xml");

  if(!$xml)
  {
     die("file not found");
  }

  $rec=$xml->DomDocument;
  foreach($rec->name as $a)
  {
      echo"name=".$rec->name;
  }

?>