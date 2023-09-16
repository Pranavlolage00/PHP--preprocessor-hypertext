<?php
function power($x,$y)
{

    $p=1;
    for($i=1; $i<=$y; $i++)
    {
        $p=$p*$x;
    }
    print("x raise to y=".$p);
}

power(2,5);

?>