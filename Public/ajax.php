<?php 
	if($_POST){
		require_once('../set.php');
		set::Controller(set::Post('PluginName'), set::Post('FileName'), set::Post('Method'), set::Post('DataResult'));
	} else {
		header('Location: index.php');
	}
?>