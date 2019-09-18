<!DOCTYPE html>

<html lang="ko">

<head>
	<meta charset="UTF-8">
	<title>PHP Cookie And Session</title>
</head>

<body>



<?php
	//exception handling
	try{
		throw new Exception("exception message");
	}
	catch (Exception $ex){
		echo $ex->getMessage()."<br>";
		echo "file address: ".$ex->getFile()."<br>";
		echo "error line: ".$ex->getLine();
	}
?>


</body>

</html>

