<?php 
	require_once('../col.php');
	class set extends col{
		
		public static function Post($Value){
			$Method = $_POST[$Value];
			$Trim = trim($Method);
			$Chars = htmlspecialchars($Trim);
			return $Chars;
		}
		
		public static function bot($Type, $Folder, $PluginName, $FileName, $Data){
			if($Data){
				foreach($Data as $key=>$value)
				{
					${$key} = $value;
				}
			}
			$Path = '../Plugins/'.$PluginName.'/'.$Folder.'/'.$FileName.'.php';
			if($Type){
				require_once($Path);
				} else {
				include $Path;
			}
		}
		
		public static function Controller($PluginName, $ControllerName, $Method, $Data){
			$json = str_replace('&quot;', '"', $Data);
			$getData = json_decode($json, true);
			self::bot(true, 'Controller', $PluginName, $ControllerName, null);
			$New = new $ControllerName();
			$New->$Method($getData);
		}
		
		public static function Model($PluginName, $ModelName){
			self::bot(true, 'Model', $PluginName, $ModelName, null);
		}
		
		public static function View($PluginName, $ViewName, $Data){
			self::bot(false, 'View', $PluginName, $ViewName, $Data);
		}
	}
?>