<html>
<head>
	<title>Hello goorm</title>
</head>
<body>
	<h1>Hello goorm</h1>
	<?php
		echo "Contents here wow";
		$var = 10;
		echo "$var";
		echo"{$var}";//var값 표시
		echo $bool ?"true<br>": "false<br>";//기본 불리언 값
		//php연산자
		var_dump($var);//NULL값
		$int += 15; var_dump($int);//기본값에다 15 더해서 15임
		$flt += 3.14; var_dump($flt);
		$str .= "programming";var_dump($str);
		$arr[2] = "second array"; var_dump($arr);
		//local variable
		/*
		function varFunc(){
			$var = 10;
			echo "inside variable var is {$var}.<br>";
		}
		varFunc();
		echo "outside variable var is {$var}";
		*/
		//global variable
		$var = 10;
		function varFunc(){
			echo "inside function global variable is {$var}";//출력값 없음
			global $var;
			echo "inside function global variable is {$var}";//global로 변수 호출해줘야지 출력
			echo "inside function GLOBALS variable is {$GLOBALS['var']}";// 
			
			
			
		}
		varFunc();
		echo "outside variable var is {$var}";
	
		//static variable
		function counter(){
			static $count = 0;
			echo " call inside function static variable count is {$count}";
			$count++;
		}
	
		counter();
		counter();
		counter();
		//define(상수이름,상숫값,대소문자 구분 여부)
		/*
		define("PHP","Welcome to PHP class<br>");//대소문자를 구분함 (기본설정)
		echo PHP;
		echo php;
		define("PHP","Welcome to PHP class<br>",true);//대소문자를 구분안함
		echo PHP;//구분 안함
		echo php;//구분 안함
		
		function defFunc(){
			echo PHP;
			define("PHP","Welcom to PHP class");
			echo PHP;
		}
	
		defFunc();
		echo PHP;
		*/
		//magic constants
		//echo "<pre>";
		//print_r(get_defined_constants(true));
		//echo "</pre>"
		/*
		__LINE__	파일의 현재 줄 번호를 반환함.
		__FILE__	파일의 전체 경로와 이름을 반환함. include 내부에서 사용할 경우 include된 파일명을 반환함.
		__DIR__		파일의 디렉터리를 반환함.포함한 파일 안에서 사용할 경우 포함된 파일의 디렉터리를 반환함.
					dirname(__FILE__)과 같은 결과를 반환함.

		__FUNCTION__	함수의 이름을 반환함.
		__CLASS__	클래스의 이름을 반환함. 클래스 이름은 대소문자를 구분함.
		__TRAIT__	트레이트(trait)의 이름을 반환함. 트레이트의 이름은 트레이트를 선언한 네임스페이스를 포함함.

		__METHOD__	클래스의 메소드 이름을 반환함.
		__NAMESPACE__	현재 네임스페이스의 이름을 반환함.
		
		function magicCons() {
   			echo __LINE__;     // 파일의 현재 줄 번호를 반환함.
    		echo __FUNCTION__; // 함수의 이름을 반환함.
    		echo __METHOD__;   // 클래스의 메소드 이름을 반환함.
		}
		magicCons();
		*/
	?>
</body>
</html>