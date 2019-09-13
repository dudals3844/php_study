<?php
//while do.while

    $i = 0;
    while ($i < 5) {
        echo($i++)."<br>";
    }

    $j = 0;

    do {
        echo "variable j is ".(++$j)." ";
    }while($j > 5);
    //한번은 실행됨
?>