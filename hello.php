<?php
    //http://tcpschool.com/php/php_function_basic 공부하는 사이트
    //Date time function

    echo date("Y/m/d h:i:s");

    //timestamp

    echo mktime(0,0,0,1,1,2000)."<br>";
    echo mktime()."<br>";
    echo time();

    $array = getdate();
    foreach($array as $key => $value){
        echo $key." ".$value."<br>";
    }
    
    //Validation of dates
    var_dump(checkdate(1,31,2000));//valid date
    var_dump(checkdate(2,31,2000));//unvalid date
?>