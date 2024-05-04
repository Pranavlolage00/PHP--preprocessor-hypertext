<?php

  $xml=simplexml_load_file("abc.xml");
    if(!$xml)
    {
        die("file not found...");
    }
    $xmlstring=$xml->asXML();
    echo $xmlstring;

?>