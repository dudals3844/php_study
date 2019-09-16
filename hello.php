<?php
    //http://tcpschool.com/php/php_function_basic 공부하는 사이트
    //Inheritance

    //Overriding

    class A {
        public $property = "class A";
        public function showProperty(){
            echo $this->property;
        }
    }

    class B extends A {
        public $property = "class B";

        //overriding
        public function showProperty(){
            echo "hello".$this->property."<br>";
        }
    }

    $a = new A();
    $a ->showProperty();// call class A method
    $b = new B();
    $b ->showProperty();//call class B method

?>