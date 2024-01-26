<?php
   $xml=simplexml_load_file("book.xml");

   if(!$xml)
   {
      die("file not found");
   }
   echo"<table border='1'><tr>";
   echo"<th>BOOK_NAME</th>";
   echo"<th>BOOK_AUTHOR</th>";
   echo"<th>BOOK_PRICE</th></tr>";
   foreach($xml->book as $res)
   {
      echo"<tr><td>$res->name</td>";
      echo"<td>$res->author</td>";
      echo"<td>$res->price</td></tr>"; 
   }
?>