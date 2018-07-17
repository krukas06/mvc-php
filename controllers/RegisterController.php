<?php
/**
* 
*/
require_once(ROOT.'/models/Register.php');
require_once(ROOT.'/models/bd.php');
class RegisterController
{
	
	function actionSign(){
		
		$login=$_POST['login'];
		$email=$_POST['email'];
		$password=$_POST['password'];
		$repeat_password=$_POST['repeat_password'];
		$submit=$_POST['submit'];
		$result = false;
		$errors=array();

		if(isset($submit)) {	

		if (!Register::checkPassword($password, $repeat_password)) {
			$errors[]='Пароль должен быть не менее 3-х символов';
		}

		if (!Register::checkEmail($email)) {
 			$errors[]='Неккоректный email';
		}

		if(Register::checkEmailExists($email)) {
			$errors[]='Такой email уже используется';
		}

		if($errors==false){
			$result = Register::addUser($login, $email, $password);
		}
		}


		require_once(ROOT.'/views/register.php');
	}
}
?>