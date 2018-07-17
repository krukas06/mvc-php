<?php
	/**
	* 
	*/
	require_once(ROOT.'/models/bd.php');
	class History
	{
		
		function addHistory($caption, $name, $age, $author, $history)
		{
		$db = db::dbconnected();
		$sql = 'INSERT INTO history (caption, name, age, author, 		history)'
				.'VALUES (:caption, :name, :age, :author, :history)';
		$result = $db->prepare($sql);
		$result->bindparam(':caption', $caption, PDO::PARAM_STR);
		$result->bindparam(':name', $name, PDO::PARAM_STR);
		$result->bindparam(':age', $age, PDO::PARAM_INT);
		$result->bindparam(':author', $author, PDO::PARAM_STR);
		$result->bindparam(':history', $history, PDO::PARAM_STR);
		return $result->execute();

		}
	}
?>