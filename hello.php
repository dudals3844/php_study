<?php
    //http://tcpschool.com/php/php_function_basic 공부하는 사이트
    //Interface

    //Overloading


    //Property overloading
    class PropertyOverloading {
        private $data = array();//오버로딩 변수 저장
        public $declared = 10;
        private $hidden = 20;

        public function __set($name, $value){
        echo "$name property {$name}";
        $this ->data[$name] = $value;
        }

        public function __get($name){
            echo "$name";
            if(array_key_exists($name,$this->$data)){
                return $this ->data[$name];
            } else {
                return null;
            }
        }

        public function __isset($name){
            echo "$name 프로퍼티가 설정되어 있는지 확인";
            return isset($this->data[$name]);
        }

        public function __unset($name){
            echo "$name 프로퍼티 해제";
            unset($this ->data[$name]);
        }
    }

    $obj = new PropertyOverloading();

    $obj->prop = 1;// 동적 프로퍼티 생성
    echo $obj->prop; // 동적 프로퍼티에 접근
    //var_dump(isset($obj->prop));동적 프로퍼티로 isset() 함수 호출
    unset($obj->prop);//동적 프로퍼티로 unset() 함수 호출
    var_dump(isset($obj->prop));

    echo $obj->declared;

    //Method Overloading

    class MethodOverloading{
        public function __call($name, $arguments){
            echo join(",",$arguments);
        }

        public static function __callStatic($name, $arguments){
            echo join(",",$arguments);
        }
    }

    $obj2 = new MethodOverloading();

    $obj2 ->testMethod("Class area");

    MethodOverloading::testMethod;






?>