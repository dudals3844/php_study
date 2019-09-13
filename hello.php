<?php
    //array
    $arr = array();//배열 생성
    $arr[0] = "apple";
    $arr[1] = "banana";
    $arr[2] = "orange";


    $arr2 = array("choi", "young", "min");

    $arr3 = array();
    $arr3[10] = "banana";

    var_dump($arr3);
    var_dump($arr3[0]);
    var_dump(isset($arr3[0]));
    var_dump(isset($arr3[10]));
    //isset은 변수가 초기화 되어있는지 확인

    $arr4 = array("apple", "banana", "orange");
    for($i = 0; $i < count($arr4);$i++){
        echo $arr[$i]."<br>";
    }

    foreach($arr4 as $element){
        echo $element;
    }


?>