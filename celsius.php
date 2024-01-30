<?php
   class temp
   {
      public $f,$c;
      function __construct($f,$c)
      {
           $this->f=$f;
           $this->c=$c;
      }
      function convert_c_to_f()
      {
          $ans=$this->c*9/5+32;
          echo"<br>convert celsius to fehrenheit:".$ans;
      }
      function convert_f_to_c()
      {
          $ans=$this->f-32*5/9;
          echo"<br>convert fehrenheit to celsius:".$ans;
      }

   }
   $ob=new temp(50,63);
   $ob->convert_f_to_c();
   $ob->convert_c_to_f();

?>