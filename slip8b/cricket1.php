<?php
   
   $xml=simplexml_load_file("cricket.xml");
   if(!$xml)
   {
       die("file not found...");
   }
        $pname=$_POST["t1"];
   
     foreach($xml->palyer_info as $a)
     {
          
        if($pname==$a->name)
        {
            echo"<br>player name=".$a->name;
            echo"<br>player country=".$a->country;
            echo"<br>player wickets=".$a->wickets;
            echo"<br>player runs=".$a->runs;
        }
     }
?>