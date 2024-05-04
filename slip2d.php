<?php
class demo 
{
   public $eno,$ename,$sal;
     function disp($eno,$ename,$sal)
     {
        echo"<br>employee number=".$eno;
        echo"<br>employee name=".$ename;
        echo"<br>employee salary=".$sal;
     }
}
$ob=new demo();
$ob->disp(101,'om',52554);
$res=get_declared_classes();
print_r($res);
$res=get_class_methods($ob);
print_r($res);
$res=get_class_vars(get_class($ob));
print_r($res);


?>