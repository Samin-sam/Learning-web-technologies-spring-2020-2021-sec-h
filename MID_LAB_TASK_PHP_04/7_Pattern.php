<?php 

    for($i=0;$i<=2;$i++)
    {
            for($k=0;$k<=$i;$k++)
            {
            echo "* ";
            }
        echo "<br>";
    }
    echo "<br>";

    for($i=0;$i<=3;$i++)
        {
            $m=1;
        for($k=3-$i;$k>=1;$k--)
        {
            
        echo $m;
        $m++;
        }
        echo "<br>";
        }

        $alpha = range('A', 'Z');  
        $n=0;
            for($i=0; $i<3; $i++)
            {
                  
                for($k=0; $k<=$i; $k++)
                {  
                    echo $alpha[$n];
                    $n++;  
                }  
                    echo "<br>";  
            }

    ?>