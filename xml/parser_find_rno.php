<html>
    <body>
        <form method="POST" action="#">
            enter realse-year to search:
            <input type="text" name="t1" value="<?php echo $_POST['t1']; ?>">
            <input type="submit">
        </form>
    </body>
</html>
<?php

$yr=$_POST["t1"];
$flag=0;
$xml=simplexml_load_file("movie.xml");
if(!$xml)
{
    die("file not found..");
}
foreach($xml->category as $a)
{
    if($a->release_year==$yr)
    {   
        $flag=1;
        echo"record found..";
        echo"movie name=".$a->movie_name;
        echo"actor name=".$a->actor_name;
    }
}
if($flag==0)
      echo"record not found..";
  
?>
