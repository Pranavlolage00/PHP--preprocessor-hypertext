<?php

header("content-type:text/xml");
 echo"<?xml version='1.0' encoding='UTF-8'?>";
 echo"<movie>";
      echo"<category type='Horror'>";
         echo"<movie_name>NARUTO</movie_name>";
         echo"<actor_name>SASUK</actor_name>";
         echo"<release_year>2005</release_year>";
        echo"</category>";
      echo"<category type='Action'>";
         echo"<movie_name>HANUMAN</movie_name>";
         echo"<actor_name>OM</actor_name>";
         echo"<release_year>2024</release_year>";
     echo"</category>";
      echo"<category type='classical'>";
         echo"<movie_name>SALAR</movie_name>";
         echo"<actor_name>PRABHAS</actor_name>";
         echo"<release_year>2024</release_year>";
     echo"</category>";
    echo"</movie>";
?> 