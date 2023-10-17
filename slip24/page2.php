<?php
  session_start();
  $user="lolagepranav";
  $pass="sonar1321";
  if(isset($_SESSION["cnt"]))
  {
     $c=$_SESSION["cnt"];
     $c=$c+1;
     if($_SESSION["cnt"]<3)
     {
        if($user=="lolagepranav" || $pass=="sonar1321")
        {
            echo"login success";
        }
        else
        {
            echo"wrong password";
            echo"your attempt".$_SESSION["cnt"];
        }
     }
     else
     {
        echo"your attempt is over";
     }
  }
  else
  {

     $_SESSION["cnt"]=1;
  }

?>