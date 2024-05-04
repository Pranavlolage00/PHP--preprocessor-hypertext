<?php
class Myclass
{
            public $a;
            public $b=305;
            public $c='Nikita';
            function Myclass()
    {
                        //Myclass function
            }
            function myfun1()
    {
                        //functin
    }
            function myfun2()
    {
                        //functin
    }
}
            $class=get_declared_classes();
            foreach($class as $cname)
            {
                        echo"$cname<br>";
            }
            echo"<br>Class Methods are : <br>";
            $m=get_class_methods('Myclass');
            foreach($m as $mname)
            {
                        echo"$mname<br>";
            }
            $cp=get_class_vars('Myclass');
            echo"class variables are :<br>";
            foreach($cp as $cpname => $v)
            {
                        echo"$cpname : $v <br>";
            }

?>
