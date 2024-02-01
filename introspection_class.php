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

    if(class_exists("mobile"))
       echo"<br><br>classs found..";
   else
      echo"<br><br>classs not found...";

      $ans=get_class_methods("mobile");
      echo"<br><br>methods=";
      print_r($ans);

    $a=get_class_vars("mobile");
    echo"<br><br>varibales=";
    print_r($ans); 

    $p=get_declared_classes();
      echo"classes=";
      print_r($p);


?>