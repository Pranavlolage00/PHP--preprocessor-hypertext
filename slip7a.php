<?php  
interface I1
{
    function gmtokg($w);
    function kgtogm($w);
}
class demo implements I1
{
    function gmtokg($w)
    {
        $ans=$w/1000;
        echo"<br>gram to kg=".$ans;
    }   
    function kgtogm($w)
    {
        $ans=$w*1000;
        echo"<br>kilo to gm=".$ans;
    }
}
 $ob=new demo();
 $ob->gmtokg(3500);
 $ob->kgtogm(5);
?>