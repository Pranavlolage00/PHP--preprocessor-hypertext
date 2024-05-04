$link=mysqli_connect("localhost","root","","test");
if(!$link)
{
echo "Error: Unable to connect to MySQL." . PHP_EOL;
echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
exit;
}
$name=$_GET['course'];
$studs=simplexml_load_file("slipxx.xml");
//print_r($studs);
foreach($studs as $stud)
{
$rollno=$stud->rollno;
$name = $stud->name;
$address = $stud->address;
$college = $stud->college;
$course = $stud->course;
$query = "insert into test.stud values($rollno,'$name','$address','$college','$course')";
mysqli_query($link,$query);
}
$course=$_GET['course'];
$res=mysqli_query($link,"select * from stud where course='$course'");
if(@mysqli_num_rows($res)==0)
{
echo "$course doesn't exist in the table";
}
else
{
echo "<table border='1' align=center width=60%>";
echo "<tr>
<td width=15% align=center>rollno</td>
<td width=15% align=center>name</td>
<td width=15% align=center>address</td>
<td width=15% align=center>college</td>
<td width=15% align=center>course</td>
</tr>";
while($arr=mysqli_fetch_row($res))
echo "<tr><td>$arr[0]</td>
<td>$arr[1]</td>
<td>$arr[2]</td>
<td>$arr[3]</td>
<td>$arr[4]</td>
</tr>";
echo "</table>";
}
?>
