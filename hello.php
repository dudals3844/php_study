<?php
    //http://tcpschool.com/php/php_function_basic 공부하는 사이트
    //regular expression

    $subject = "간장 공장 공장장은 강 공장장이고, 된장 공장 공장장은 장 공장장이다.";

    if (preg_match('/공장/', $subject)) {
        echo "해당 문자열에서 '공장'을 발견했습니다.<br>";
    } else {
        echo "해당 문자열에서 '공장'을 발견하지 못했습니다.<br>";
    }

    if (preg_match('/장공/', $subject)) {
        echo "해당 문자열에서 '장공'을 발견했습니다.<br>";
    } else {
        echo "해당 문자열에서 '장공'을 발견하지 못했습니다.<br>";
    }

    $subject2 = "bcabcAB";
    preg_match_all('/AB/',$subject2,$matches_01);//"AB"
    preg_match_all('/AB/i',$subject2,$matches_02);//"ab","AB"

?>