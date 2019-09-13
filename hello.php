<?php
    //multidimensional array

    //2차원 배열
    $arr = array(
        array(),
        array(),
        array()
    );

    /*
    $arr = array(
        array("apple", "korea", "1000"),
        array("banana", "philoppines",2000s),
        array()
    );

    */
    $arr[0][0] = "apple";
    $arr[0][1] = "korea";
    $arr[0][2] = "1000";

    $arr[1][0] = "banana";
    $arr[1][1] = "philippines";
    $arr[1][2] = 2000;


    echo $arr[0][0].", ".$arr[0][1].", ".$arr[0][2]."<br>";
    echo $arr[1][0].", ".$arr[1][1].", ".$arr[1][2]."<br>";
?>