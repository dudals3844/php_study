<html>
<head>
	<title>Hello goorm</title>
</head>
<body>
	<h1>Hello goorm</h1>
	<?php
	//normal type
	var_dump((bool) false);//false
	var_dump((bool) "false");//true
	var_dump((bool) 0);//false
	var_dump((bool) -100);//true
	var_dump((bool) 0.0);//false
	var_dump((bool) "");//false
	var_dump((bool) "0");//false
	var_dump((bool) array());//false
	var_dump((bool) null);//false
	
	//integer
	echo "integer type size is ".PHP_INT_SIZE." <br> ";
	echo "integer max type size is ".PHP_INT_MAX." <br> ";
	$int_01 = 100;
	$int_02 = 2147483647; // integer가 표현할 수 있는 범위를 넘지 않는 값을 대입함.
	$int_03 = 2147483648; // integer가 표현할 수 있는 범위를 넘는 값을 대입함. 이 변수는 자동으로 float됌
	
	//float
	$float_01 = 3.14;
	$float_02 = 1.23e-4; // float이 표현할 수 있는 범위를 넘지 않는 값을 대입함.
	$float_03 = 1.8E308; // float이 표현할 수 있는 범위를 넘는 값을 대입함.
	//위에 값은 자동으로 INF 즉 무한대로 간다.
	
	//string
	$str_01 = "PHP";
	$str_02 = "JAVAscript";
	echo strlen($str_01);//3
	echo strlen($str_02);//10
	
	//array는 key와 value로 이루어져 있다
	
	$arr = array(
		1 => " first value", //1과 "1"은 같은 값임
		"1" => " second value",//같은 키값으로 두번 선언해서 결국 두번쨰 키값만 남음
		10 => " third value",
		-10 => " forth value"
	);
	
	var_dump($arr);
	echo $arr[1];
	echo $arr["1"];
	echo $arr[10];
	echo $arr[-10];
	
	//object
	
	class Lecture {
		function Lecture(){
			$this->lec_01 = "PHP";
			$this->lec_02 = "MYSQL";
			
		}
	}
	
	$var = new Lecture;//객체 생성
	echo $var->lec_01;
	echo "<br>";
	echo $var->lec_02;
	
	//NULL
	
	$var_01;
	var_dump($var_01);
	
	$var_01 = 100;//변수 초기화
	var_dump($var_01);//초기화해서 제대로 나옴
	
	unset($var_02);//var_02를 삭제
	var_dump($var_02);//삭제되는 변수를 참조
	
	
	
	
	
	
	
	
	?>
</body>
</html>