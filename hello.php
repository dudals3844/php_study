<?php
    //http://tcpschool.com/php/php_function_basic 공부하는 사이트
    //Static Members

    // 단순히 클래스의 정의 내에서 프로퍼티나 메소드를 사용하고 싶을 때는 범위 지정 연산자(::)를 사용할 수 있습니다.

    class StaticMember {
        public static $staticProperty = "static property";
        public static function showProperty(){
            echo self::$staticProperty;//self: 자기 자신에 접근
            //parent: 부모 클래스에 접근할때
        }
    }

    echo StaticMember::showProperty();//호출가능
    echo StaticMember::$staticProperty;//접근 가능

    $var = new StaticMember();//create instance
    echo $var->showProperty();
    //echo $var ->staticProperty;//접근 불가
?>