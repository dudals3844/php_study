<?php
    //http://tcpschool.com/php/php_function_basic 공부하는 사이트
    //regular expression2

    //special characters
    /*
    /.ap/         // 문자열 "ap" 앞에 임의의 한 문자가 등장하는 문자열 : aap, bap, cap, @ap, #ap, ...
    /a?b/         // b 앞에 a가 0번 또는 1번 등장하는 문자열 : b, ab
    /a*b/         // b 앞에 a가 0번 이상 등장하는 문자열 : b, ab, aab, aaab, ...
    /a+b/         // b 앞에 a가 1번 이상 등장하는 문자열 : ab, aab, aaab, aaaab, ...
    /a{2,4}b/     // b 앞에 a가 2번 이상 4번 이하 등장하는 문자열 : aab, aaab, aaaab
    /a{2,}b/      // b 앞에 a가 2번 이상 등장하는 문자열 : aab, aaab, aaaab, aaaaab, ...
    /^abc/        // abc로 시작하는 문자열 : abc, abcd, abcdef, ...
    /abc$/        // abc로 끝나는 문자열 : abc, zabc, xyzabc, ...
    /abc|def|ghi/ // abc, def 또는 ghi 중 하나의 문자열
    */

    //quantifier
    $subject = "PHP is coooooool!";

    // 문자 'l' 바로 앞에 문자 'o'가 0 또는 1번 나타나는 경우를 검색함.
    preg_match_all('/o?l',$subject,$match_01);

    // 문자 'l' 바로 앞에 문자 'o'가 0번 이상 나타나는 경우를 검색함.
    preg_match_all('/o*l/',$subject,$match_02);

    // 문자 'l' 바로 앞에 문자 'o'가 1번 이상 나타나는 경우를 검색함.
    preg_match_all('/o+l/', $subject, $match_03);

    // 즉, 영문 소문자만으로 이루어진 부분 문자열을 검색함.
    preg_match_all('/[a-z]+/', $subject, $match_04);

    // 문자 'l' 바로 앞에 문자 'o'가 최소 2번 이상 최대 4번 이하로 나타나는 경우를 검색함.
    preg_match_all('/o{2,4}l/',$subject,$match_05);
    var_dump($match);

    // 문자 'l' 바로 앞에 문자 'o'가 최소 2번 이상 나타나는 경우를 검색함.
    preg_match_all('/o{2,}l/',$subject,$match_06);
    var_dump($match);

    // 문자 'l' 바로 앞에 문자 'o'가 정확히 6번 나타나는 경우를 검색함.
    preg_match_all('/o{6}l/',$subject,$match_07);

    $subject2 = "abcdef defabc";

    // 단어가 문자열 "abc"로 시작하는 경우를 검색하여, 해당 부분 문자열을 'ABC'로 대체함.
    $match_08 = preg_replace('/^abc/','ABC',$subject2);

    // 단어가 문자열 "abc"로 끝나는 경우를 검색하여, 해당 부분 문자열을 'ABC'로 대체함.
    $match_09 = preg_replace('/abc$/','ABC',$subject2);





?>