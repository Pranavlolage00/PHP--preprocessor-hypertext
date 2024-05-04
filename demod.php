<html>
<body>
<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
Select options:

<input type="radio" value="push" name="d1">Push</input>
<input type="radio" value="pop" name="d1">Pop</input>
<input type="radio" value="display" name="d1">Display</input>
<input type="submit">
</form>
<?php
echo "
Index ARRAY.......
";
$a = array(1,2,3,4,5,6,7);
print_r($a);
print"<br>";
if($_SERVER["REQUEST_METHOD"] == "POST")
{
$opt = $_POST['d1'];
if($opt == 'push')
{
array_push($a,11);
print_r($a);
}

else if($opt == 'pop')
{
array_pop($a);
print_r($a);
}
else if($opt == 'display')
{
//array_pop($a);
print_r($a);
}

}
?>