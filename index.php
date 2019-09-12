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
		function varFunc(){
			$var = 10;
			echo "inside variable var is {$var}.<br>";
		}
		varFunc();
		echo "outside variable var is {$var}";
		//global variable
		$var = 10;
	?>
</body>
</html>