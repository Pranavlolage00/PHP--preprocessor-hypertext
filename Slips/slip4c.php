<?php

class employee
{
   private $id,$name,$dept,$sal;
      function __construct($id,$name,$dept,$sal)
      {
           $this->id=$id;
           $this->name=$name;
           $this->dept=$dept;
           $this->sal=$sal;
      }
      public function sal1()
      {
        return $this->sal;
      }
}
class manager  extends employee
{
    private $bonus;
        function __construct($bonus)
        {
           
             $this->bonus=$bonus;
        }
        function max($ob1)
        {
           $ans=$this->bonus+parent::sal1();
            
        }
           
}

?>