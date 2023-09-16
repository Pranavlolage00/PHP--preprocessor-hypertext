<?php
 class fruit
 {
    public $fname,$fcolor,$fprice;
    function accept($fname,$fcolor,$fprice)
    {
        $this->fname=$fname;
        $this->fcolor=$fcolor;
        $this->fprice=$fprice;
    }
    function disp()
    {
       echo("<br> fruit name=".$this->fname);
       echo("<br> fruit color=".$this->fcolor);
       echo("<br> fruit price=$".$this->fprice);
    }
 }
 $ob=new fruit();
 $ob->accept("pineapple","yellow","450");
 $ob->disp();
?>