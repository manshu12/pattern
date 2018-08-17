<?php

for($i=1;$i<=10;$i++)
{
   
    for($j=1;$j<=10;$j++)
    {
        if($i==1 || $i==10)
        {
         echo "*&nbsp";
        }
        else if($j==1 || $j==10) {
            
            echo "*&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
        }
    }
    echo "\n";
    
}

?>