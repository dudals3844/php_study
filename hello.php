<?php
    //http://tcpschool.com/php/php_function_basic 공부하는 사이트
    //Using class

    class ClassName {
        public $publicVar;
        private $privateVar;
        protected $protectedVar;


        public function _construtor(){
            $this->plublicVar = "public property ";
            $this->privateVar = "private property";
            $this->protectedVar = "protected property";

        }


        public function publicMethod(){
            echo "public method ";
        }

        protected function protectedMethod(){
            echo "protected method";
        }

        private function privateMethod(){
            echo "private method ";
        }
    }



    $object = new ClassName();

    echo $object ->plublicVar;
    //echo $object ->protectedVar;//접근 안됌
    //echo $object ->privateVar;//접근 안됌

    $object->publicMethod();      // 호출 가능
    //$object->protectedMethod(); // 호출 불가능
    //$object->privateMethod();   // 호출 불가능


    //data hiding
    class ClassName2 {
        private $privateVar;

        public function _constructor(){
            $this ->privateVar = "private property";
        }

        public function getValue(){
            return $this ->privateVar;
        }

        public function setValue($value){
            $this ->privateVar = $value;
        }
    }



    $object2 = new ClassName2();

    $object2->setValue("hello");
    echo $object2 ->getValue();

?>