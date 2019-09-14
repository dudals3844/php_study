<?php
    //http://tcpschool.com/php/php_function_basic 공부하는 사이트
    //parameter argument

    //using function

    $makefunc = true;

    if($makefunc) {
        function func() {
            echo "now use function";

        }
        func();
        //함수를 호출할 수 있습니다.

    }

    //function within function

    function out(){
        function in(){
            echo "now availible using function";
        }
    }

    out();
    in();

    //recursive function

    function factorial($num){
        if($num > 1){
            return $num*factorial($num-1);
        } else {
            return 1;
        }
    }
    echo factorial(4);


    //variable function
    function first(){
        echo " first function ";
    }

    function second($para){
        echo " second function ";
        echo " variable is {$para} ";
    }

    $func = "first";
    $func();
    $func = "second";
    $func(20);
?>