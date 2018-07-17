<?php 
/**
* 
*/
class db
{
	
	function dbconnected() {
		$user='root';
		$password='';
		$db= new PDO ('mysql:host=localhost;dbname=kurapaty',$user,$password);
		return $db;
	}
}
 ?>