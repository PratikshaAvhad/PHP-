<?php
     function factorial($n)
  {
    $f=1;
     for($i=1;$i<=$n;$i++)
     {
       $f=$f*$i;
     }
    echo("<br> factorial=".$f);
  }
 
   factorial(5);

?> 