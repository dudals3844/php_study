<!DOCTYPE html>
<?php
	session_start();
?>
<html lang="ko">

<head>
	<meta charset="UTF-8">
	<title>PHP Cookie And Session</title>
</head>

<body>



<?php
	//session study
	//$_SESSION["city"] = "부산";
	//$_SESSION["gu"] = "해운대구";
	//echo "세션 변수가 등록되었습니다.";
	echo "제가 살고 있는 도시는 {$_SESSION['city']}입니다.<br>";
	echo "그 중에서도 {$_SESSION['gu']}에 살고 있습니다.<br>";//세션을 보여줌
	print_r($_SESSION);		// 모든 세션 변수의 정보를 연관 배열 형태로 보여줌.

	//특정 세션 변수의 등록 해지
	if(isset($_SESSION["city"])){
		echo "{$_SESSION["city"]} 세션 변수가 삭제 되었습니다.";
		unset ($_SESSION["city"]);
	} else {
		echo "해당 세션에 변수가 등록되어 있지 않습니다.";
	}


	session_unset();//모든 세션 변수의 등록 해지
	session_destroy();// remove session id
	echo "모든 세션 변수가 등록 해지되었으며, 세션 아이디도 삭제되었습니다.";
?>


</body>

</html>

