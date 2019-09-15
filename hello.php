<?php
    //http://tcpschool.com/php/php_function_basic 공부하는 사이트
    //array function
    $arr = array(1,5,7,3,3,1,2);

    echo "array number is ".count($arr)." ";
    echo "array number is ".sizeof($arr)." ";

    $acv = array_count_values($arr);

    $element = current($arr);
    while($element){
        echo $element;
        $element = next($arr);

    }

    $element = end($arr);
    while($element){
        echo $element;
        $element = prev($arr);
    }

    $element = end($arr);
    while($element){
        echo $element;
        $element = prev($arr);

    }

    echo " ";
    sort($arr);
     $element = current($arr);
    while($element){
        echo $element;
        $element = next($arr);

    }

    $arr2 =  array(15, 2, 1, 21, 121);

    sort($arr2,SORT_NUMERIC);//숫자로 비교함
    sort($arr2,SORT_STRING);//문자로 비교

    //Associative Array Sort

    $arr3 = array("apple" => 1000, "banana" => 2000, "orange" => 1500);
    asort($arr3);//값으로 배열을 정렬 apple orange banana
    ksort($arr3);//키 값으로 배열을 정렬 apple banana orange

    //suffle($arr);//무작위 배열 정리

    $arr_01 = array(1,2,3,4,5);
    $arr_02 = array_reverse($arr_01);

    for($i = 0; $i < count($arr_02); $i++){
        echo $arr_02[$i].",";
    }


?>