<?php
$xml=simplexml_load_file("movie.xml");
  if(!$xml)
  {
     die("file not found...");
  }     
  
  $nm=$_POST["t1"];
  $flag=0;
   foreach($xml->movie_info as $a)
       {
           if($a->mname==$nm)
           {
             echo"Record found....";
                $flag=1;
           }
       }
       if($flag==0)
       {
          echo"record not found";
       }
  
?>