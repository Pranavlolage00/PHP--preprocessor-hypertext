<?php

 $xml=simplexml_load_file("cricket.xml");
 if(!$xml)
 {
    die("file not found");
 }
   foreach($xml->cricket as $res)
   {
       if($res->runs>='1200' && $res->wickets>='50')
       {
              echo"<br>player=".$res->player;
              echo"<br>runs=".$res->runs;
              echo"<br>wickets=".$res->wickets; 
              echo"<br>number of not-out=".$res->noofnotout;
       } 
   }
   
?>

