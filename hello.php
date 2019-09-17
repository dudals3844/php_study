<?php
    //http://tcpschool.com/php/php_function_basic 공부하는 사이트
    //Late static bindings
    /*
    class A {
        public static function className(){
            echo __CLASS__;
        }

        public static function printClass(){
            //self::className();//정적 메소드
            static::className();//늦은 정적 메소드
        }
    }


    class B extends A {
        public static function className(){
            echo __CLASS__;
        }
    }

    B::printClass();
    */

    //call non static method late static bindings

    class A {
        private function className(){
            echo __CLASS__;
        }

        public function printClass(){
            $this ->className();
            static::className();
        }
    }

    class B extends A {

    }

    class C extends A {
        //overriding
        private function className(){

        }
    }

    $b = new B();
    $b -> printClass();

    $c = new C();
    //$c -> printClass();

?>