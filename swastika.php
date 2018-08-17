<?php
function swastika($row, $col) 
{
for ($i = 0; $i < $row; $i++) 
{
    for ($j = 0; $j < $col; $j++) 
    {
         

    if ($i < floor($row / 2))
    {
         
        
        if ($j < floor($col / 2)) 
        {
             
        // print '*' if j=0
        if ($j == 0)
            echo "*";
        
        else
            echo " " . " ";
        }
         
  
        else if ($j == floor($col / 2))
        echo " *";
        else
        {
       
        if ($i == 0)
            echo " *";
        }
    }
    else if ($i == floor($row / 2))
        echo "* ";
    else
    {
         
      
        if ($j == floor($col / 2 )|| 
            $j == $col - 1)
        echo "* ";
         
        
        else if ($i == $row - 1) 
        {
             
    
        if ($j <= floor($col / 2) ||
            $j == $col - 1)
            echo "* ";
        else
            echo " " . " ";
        } 
        else
        echo " " . " ";
    }
    }
    echo "\n";
}
}
$row = 7;
$col = 7;
swastika($row, $col);
     
?>
