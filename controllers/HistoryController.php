<?php
/**
* 
*/
require_once(ROOT.'/models/histors.php');
class HistoryController
{

	function actionHistors(){
		$caption=$_POST['caption'];
		$name=$_POST['name'];
		$age=$_POST['age'];
		$author=$_POST['author'];
		$history=$_POST['history'];
		$submit=$_POST['submit'];
		$result=false;
		if($submit){
			$result=History::addHistory($caption, $name, $age, $author, $history);
		}
		require_once(ROOT.'/views/history.php');
	}
}
?>