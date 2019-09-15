<?php
    //http://tcpschool.com/php/php_function_basic 공부하는 사이트
    //String function
    $str = "12345678";
    echo strlen($str);

    $str1 = "한글 문자열";
    echo strlen($str1);
    //echo mb_strlen($str1);
    //echo mb_strlen($str1, "UTF-8");

    //Compare string
    echo strcmp("abc","ABC");
    echo strcasecmp("abc","ABC");
    echo strcmp("2","10");
    echo strnatcmp("2","10");

    //search string
    echo strstr("ABCabcDEFabc","abc");
    echo strrchr("ABCabcDEFabc","abc");
    echo stristr("ABCabcDEFabc","abc");

    //location string
    echo strstr("ABCabcDEFabc","abc");
    echo strrchr("ABCabcDEFabc","abc");
    echo stristr("ABCabcDEFabc","abc");

    //location string return index number
    echo strpos("ABCabcDEFabc","abc");//abc나오는 첫번째 인덱스 숫자
    echo strrpos("ABCabcDEFabc","abc");//abc나오는 마지막 인덱스 숫자

    //string extraction
    $str2 = "Hello World!";
    echo substr($str2,3);
    echo substr($str2,-3);
    echo substr($str2,1,5);
    echo substr($str2,1,-5);

    //Replacing string case
    echo strtolower("Hello World!");
    echo strtoupper("hello world!");
    echo ucfirst("hello world!");
    echo ucwords("hello world!");

    //Combine and break strings
    $str3 = "hello, beautiful, world!";
    $array = explode(',',$str3);
    echo $array[0];//hello
    echo $array[1];//beautiful
    echo $array[2];//world!

    $str4 = implode('!',$array);//!기준으로 문자열을 결합
    echo $str4;//hello! beautiful! world!

    $token = strtok($str4, '!');//!기준으로 토큰화
    echo $token;//hello
    while($token != ""){
        $token = strtok('!');
        echo $token;//beautiful, world
    }

    //Replace string
    $str5 = "hello, world!";
    echo str_replace('o', '*', $str5);      // 문자열의 모든 'o'를 '*'로 대체함.
    echo substr_replace($str5, '*', 2);     // 세 번째 문자부터 끝까지를 '*'로 대체함.
    echo substr_replace($str5, '*', -2);    // 끝에서 두 번째 문자부터 끝까지를 '*'로 대체함.
    echo substr_replace($str5, '*', 2, 4);  // 세 번째 문자부터 네 글자를 '*'로 대체함.
    echo substr_replace($str5, '*', 2, -4); // 세 번째 문자부터 끝에서 다섯 번째 문자까지를 '*'로 대체함.
    echo substr_replace($str5, '*', 2, 0);  // 두 번째 문자 뒤에 '*'을 삽입함.

?>