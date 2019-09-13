<?php
    //assoviative array

    //인덱스를 숫자가 아니라 문자로도 사용할 수 있다
    $array = array();

    $array["apple"] = 1000;
    $array["banana"] = 2000;
    $array["orange"] = 3000;

    //array[key] = value
    //배열 선언과 동시에 초기화
    $array2 = array("apple" => 1000, "banana" => 2000);
    echo $array2["apple"].",".$array2["banana"];

    foreach($array as $key => $value){
        echo $key."".$value;
    }
?>