<?php
    //continue break
    $excepNum = 4;
    for ($i = 0; $i < 100; $i++){
        if($i = 0 % $excepNum == 0){
            continue;
        }
        echo "{$i} ";
    }

    $sum = 0;
    $startNum = 1;
    $endNum = 100;
    $i = $startNum;
    while(true){
        $sum += $i;
        if($i == $endNum){
            break;
        }
        $i++;
    }

    echo "{$startNum}  {$endNum}  {$sum}" ;
?>