<html>
    <body><center>
   <font color="green"> <br><br><br><br> <h1>REGISTRATION..</h1><br><br>
        <form method="POST" action="signUp.php">
            <center>
            <table border="1" width="30%" hight="80%">
                <tr><th>
                <font color="green"><br>Enter name: &nbsp;&nbsp;&nbsp;
                 <input type="text" name="t1"><br><br><br>
                 Enter Phone:&nbsp;&nbsp;&nbsp;
                 <input type="text" name="t2"><br><br><br>
                 Enter username:&nbsp;&nbsp;&nbsp;
                 <input type="text" name="t3"><br><br><br>
                 Enter Password:&nbsp;&nbsp;&nbsp;
                 <input type="password" name="t4"><br><br><br>
                 Confirm password:&nbsp;&nbsp;&nbsp;
                 <input type="password"><br><br><br>
                 <input type="submit"> &nbsp;&nbsp;&nbsp;&nbsp;
                 <input type="reset">
                </tr>
            </table>
            </center>
        </form>
    </body>
</html>
<?php
  $con=mysqli_connect("localhost","root","");
  if($con==false)
  {
    die("error in connection..");
  }
  $nm=$_POST["t1"];
  $ph=$_POST["t2"];
  $us=$_POST["t3"];
  $p=$_POST["t4"];
    mysqli_select_db($con,"project");
    $k=mysqli_query($con,"insert into login values('$nm',$ph,'$us','$p')");
    if($k==true)
    {
       echo("Register successfully..");
       header("location:login.php");
    }
    else
    {
      echo("invalid information..");
    }

    mysqli_close($con);
    
?>