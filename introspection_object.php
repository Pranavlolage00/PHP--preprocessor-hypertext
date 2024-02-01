<?php
  class shop
  {
      public $sno,$sname,$addr;
      function accepts($sno,$sname,$addr)
      {
          $this->sno=$sno;
          $this->sname=$sname;
          $this->addr=$addr;
      }
  }
  class mobile extends shop
  {
      public $mno,$mname,$price;
      function acceptm($mno,$mname,$price)
      {
           $this->mno=$mno;
           $this->mname=$mname;
           $this->price=$price;
      }
      function disp()
      {
          echo"<br>shop number=".$this->sno;
          echo"<br>shop name=".$this->sname;
          echo"<br>shop address=".$this->addr;
          echo"<br>mobile id=".$this->mno;
          echo"<br>mobile name=".$this->mname;
          echo"<br>mobile price=".$this->price;
      }
  }
   $ob=new mobile();
   $ob->accepts(124,"xaoumi","shrirampur");
   $ob->acceptm(4564,"onplus ce3 5g",450000);
   $ob->disp();
   if(is_object($ob))
     echo"<br><br>object found..";
   else
      echo"object not found..";
    
   $a=get_object_vars($ob);
   echo"<br><br>variables=";
    print_r($a);  

    if(method_exists($ob,"disp"))
        echo"<br><br>method found";
    else
        echo"<br><br>method not found"; 

?>