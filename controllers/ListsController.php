<?php
/**
* 
*/
require_once(ROOT.'/models/lists.php');
class ListsController
{
	

	function actionLists(){
		Lists::moveList();
		require_once(ROOT.'/views/list.php');
	}
}
?>