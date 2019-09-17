<?php
    //http://tcpschool.com/php/php_function_basic 공부하는 사이트
    //Interface

    //abstract class
    abstract class AbstractClass {
        abstract protected function move();//추상메소드
        abstract protected function stop();

        public function start(){

        }
    }


    //interface

    interface Transport{
        public function move();
        public function stop();
    }
    /*

    class Car implements Transport {//Transport를 구현하는 Car클래스
        function move(){

        }

        function stop(){

        }

    }
    */

    interface Overland extends Transport {
        public function highpass();//구현할 메소드
    }


    class Car implements Overland {
        function move(){

        }

        function stop(){

        }

        function highpass(){

        }
    }
