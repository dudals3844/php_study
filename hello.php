<?php
    //http://tcpschool.com/php/php_function_basic 공부하는 사이트
    //variable

    //variable type change
    $x = 5;
    echo gettype($x);

    settype($x, "string");
    echo gettype($x);

    //variable status change
    $var;
    var_dump(isset($var));
    var_dump(empty($var));

    $x = "123.41abc";
    echo intval($x);
    echo floatval($x);
    echo strval($x);



?>