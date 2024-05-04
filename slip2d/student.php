<?php
   $dom=new DOMDocument();
   $dom->load('student.xml');
   if(!$dom)
   {
    die("file not found..");
   }
   echo $dom->saveXML();
   echo $dom->save("student1.doc");
?>