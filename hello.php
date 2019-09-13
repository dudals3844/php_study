<?php
  //logical operator
	/*
	A	B	A and B (A && B)	A or B (A || B)	A xor B	!A
	true	true	true	true	false	false
	true	false	false	true	true	false
	false	true	false	true	true	true
	false	false	false	false	false	true
	*/
	
	$num_01 =  true;
	$num_02 = false;
	var_dump($num_01 and $num_02);//false
	var_dump($num_01 or $num_02);//true
	var_dump($num_01 xor $num_02);//둘다 트루거나 둘다 false이면 true반환
	var_dump((3<5) or ("12" > 20));//true
?>