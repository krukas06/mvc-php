<?php
/**
* 
*/
require_once(ROOT.'/models/bd.php');
class Lists
{
	
	function moveList()
	{
		$db = db::dbconnected();
		$sql = "SELECT * FROM history ";
		$result = $db->prepare($sql);
		$result->setFetchMode(PDO::FETCH_ASSOC);
		$result->execute();
		return $result->fetch();

	}
}
?>
