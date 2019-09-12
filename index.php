<html>
<head>
	<title>Hello goorm</title>
</head>
<body>
	<h1>Hello goorm</h1>
	<?php
	//comparison operator
	$num_01 = 3;
	$num_02 = 3.0;
	$num_03 = 3;
	
	var_dump($num_01 == $num_02);
	var_dump($num_01 === $num_02);//값은 같으나 타입이 달라 false
	var_dump($num_01 != $num_02);
	
	var_dump(0 < true);//false < true
	var_dump("123abc" == 123);//문자는 인식 안하고 숫자 123만 인식
	var_dump("123abc" === 123);//타입이 다르므오 false
	
	$arr_01 = array("a" => 10);
	$arr_02 = array("a" => 5);
	$arr_03 = array("a" => 10,"c" => 7);
	
	var_dump($arr_01 >= $arr_02);//10>5 true
	var_dump($arr_01 >= $arr_03);//arr_01이 배열개수가 적으므로 arr_03이 더 크다
	var_dump("string" < $arr_03);//배열이랑 다른타입이랑 비교하면 항상 배열이 더 크댜.
	?>
</body>
</html>