<?php

$s=new style();

echo $s->margin("class","img1","left","2");
echo $s->margin("class","img1","top","1");

echo $s->margin("class","img2","left","80");
echo $s->margin("class","img2","top","2");

echo $s->margin("class","im1","left","40");
echo $s->margin("class","im1","top","-4");
echo $s->margin("class","input1","left","40");


echo $s->margin("class","container-sm","left","30");
echo $s->margin("class","container-sm","top","3");


echo $s->elemnt("class","container-sm","border","solid 1px black");
echo $s->elemnt("class","container-sm","width","40%");
#echo $s->elemnt("class","container-sm","font-size","20px");

echo $s->elemnt("class","t","border","solid 2px black");
echo $s->elemnt("class","r","border","solid 2px black");

echo $s->elemnt("class","t","width","2%");
echo $s->elemnt("class","r","width","3%");

echo $s->elemnt("class","t","padding","1%");
echo $s->elemnt("class","r","padding","1%");

echo $s->elemnt("class","r","text-align","center");

echo $s->elemnt("class","btn btn-primary","display","inline");

?>