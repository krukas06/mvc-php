<?php
/**
* 
*/
require_once(ROOT.'/models/bd.php');
class Register
{
	
	function checkPassword($password, $repeat_password){
		if(strlen($password)>3 && $password==$repeat_password){
			return true;
		}
		    return false;
	}

	function checkEmail($email){
		if(filter_var($email, FILTER_VALIDATE_EMAIL))
			return true;
		    return false;
	}

	function checkEmailExists($email){

		$db = db::dbconnected();
		$sql = 'SELECT COUNT (*) FROM user WHERE email = :email';
		$result = $db -> prepare($sql);
		$result -> bindparam(':email', $email, PDO::PARAM_STR);
		$result -> execute();

		if($result->fetchcolumn())
			return true;
		return false;
	}

	function addUser($login, $email, $password){
		$db = db::dbconnected();
		$sql = 'INSERT INTO user (login, email, password) '
				. 'VALUES (:login, :email, :password)';
		$result = $db->prepare($sql);
		$result -> bindparam(':login', $login, PDO::PARAM_STR);
		$result -> bindparam(':email', $email, PDO::PARAM_STR);
		$result -> bindparam(':password', $password, PDO::PARAM_STR);
		return $result->execute();
				
	}
}
?>