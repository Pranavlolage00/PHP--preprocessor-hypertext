<?php
   $xml=simplexml_load_file("book.xml");

   if(!$xml)
   {
      die("file not found");
   }
   foreach($xml->book as $res)
   {
      echo"<br>Book name=".$res->name;
      echo"<br>BOOk author=".$res->author;
      echo"<br>book price=".$res->price; 
   }
?>