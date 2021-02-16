<?php 
    $a=2;
    $b=7;
    $c=5;
    echo "Given numbers= ".$a.",".$b.",".$c;
    echo "<br>";
    if($a>$b)
    {
        if($a>$c)
        {
            echo $a." is the largest number.";
        }
        else
        {
            echo $b." is the largest number.";
        }
    }
    else{
        if($b>$c)
        {
            echo $b." is the largest number.";
        }
        else
        {
            echo $c." is the largest number.";
        }
    }
?>