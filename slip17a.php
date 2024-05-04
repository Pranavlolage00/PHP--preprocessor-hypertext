
<?php
//print_r($_SERVER);
echo"<table border='1'>";
echo"<tr><th>PHP_SELF</th><th>SERVER_NAME</th><th>HTTP_HOST</th><th>SCRIPT_NAME</th></tr>";
echo "<tr><td>" .$_SERVER['PHP_SELF'] ."</td>";
echo "<td>" .$_SERVER['SERVER_NAME'] ."</td>";
echo "<td>" .$_SERVER['HTTP_HOST'] ."</td>";
echo "<td>".$_SERVER['SCRIPT_NAME']."</td>";
echo $_SERVER['HTTP_REFERER'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br></tr>";
echo"</table>";
?>
