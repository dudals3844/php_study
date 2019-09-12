<html>
<head>
	<title>Hello goorm</title>
</head>
<body>
	<h1>Hello goorm</h1>
	<?php
	//type change
	
	$var = "text";//string
	$var = 10;//int
	$var = 3.14;//float
	
	//type castiong 강제 타입 변환
	$var_01 = 10;
	var_dump($var_01); //int(10)
	
	$var_02 = (boolean)$var_01;
	var_dump($var_02); //실수 10이면 boolean true
	
	$var_03 = 0;
	var_dump($var_03);
	$var_04 = (boolean)$var_03;
	var_dump($var_04);//false 실수 0은 boolean은 0
	
	//variable variables 가변변수
	$PHP = "HTML";
	$HTML = "CSS";
	$CSS = "JAVAScript";
	$JAVAScript = "Ajax";
	$Ajax = "PHP";
	
	echo $PHP; //HTML
	echo $$PHP; //CSS
	echo $$$PHP; //JAVAScript
	echo $$$$PHP; //Ajax
	
	
	?>
</body>
</html>