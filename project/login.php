<html>
    <body>
        <center>
        <form method="POST" action="login.php">
            <table border="1" width="30%" height="30%">
            <font color="green"> <h1>WEL-COME TO C.D.JAIN COLLEGE OF SHRIRAMPUR</h1><br><br><br>
            <br><br>
                <tr><th> <font color="green"><h2>LOGIN:-</h2>
                         username:&nbsp; &nbsp; &nbsp; &nbsp;
                    <input type="text" name="t1" ><br><br><br>
                    password:&nbsp; &nbsp; &nbsp; &nbsp;
                    <input type="password" name="t2"><br><br>
                    <input type="submit" value="Login" name="b1">&nbsp; &nbsp; &nbsp;
                    <input type="submit" value="signUp" name="b1">                   
                </tr>
            </table>
        </form>
        </center>
    </body>
</html>
<?php
$ch=$_POST["b1"];
 if($ch=="Login")
 {
 $con=mysqli_connect("localhost","root","");
 if($con==false)
 {
    die("error in connection");
 }
  $us=$_POST["t1"];
  $p=$_POST["t2"];
  mysqli_select_db($con,"project");
  $res=mysqli_query($con,"select * from login where username='$us' and password='$p'");
    if($row=mysqli_fetch_array($res))
     {
        header("location:http://cdjcollege.com");
     }
     else
     {
        echo("<center><h1>invalid user or password...</h1>");
     }
}
    if($ch=="signUp")
    {
        header("location:signUp.php");
    }
  ?>   
