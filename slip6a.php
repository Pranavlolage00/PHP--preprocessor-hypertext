<?php
 header("content-type:text/plain");

 $url="http://www.college.com/Science/CS.php";
 $url=parse_url($url);
 print_r($url);

?>