<?php
	//user defined exception

	class CustomException extends Exception {
		public function errorMessage(){
			$msg = $this->getMessage()."<br/>".
			"error file address: ".$this->getFile()."<br/>".
			"error line number: ".$this->getLine();

			return $msg;
		}
	}

	try {
		throw new CustomException("error message");

	} catch (CustomException $ex){
		echo $ex->errorMessage();
	}

	//중첩 try
	try {
		try{
			throw new CustomException("error message");
		}
		catch(CustomException $ex){
			throw $ex;
		}
	}

	catch (Exception $ex){
		echo $ex->getMessage();
	}

	//다중 catch
	try {
		throw new CustomException("error message");
	}
	catch(customException $ex){
		echo $ex->errorMessage();
	}
	catch (Exception $ex){
		echo $ex->getMessage();
	}



?>

