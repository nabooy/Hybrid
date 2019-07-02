<?php 
	set::Model('Auth', 'resultUser');
	class MapModel extends resultUser{
		
		public function allResult(){
			$Auth = $this->getUserByID();
			$Result = set::sel("map
			LEFT JOIN map_attribute ON map_attribute.Map_ID = map.Map_ID 
			WHERE Map_SubID='".$Auth['Map_ID']."'
			ORDER BY map.Map_ID ASC
			");
			return $Result;
		}
		
		public function allResultAttribute(){
			$Result = set::sel("map_attribute");
			return $Result;
		}
		
		public function allResultMapPath(){
			$Auth = $this->getUserByID();
			$Result = set::select("SELECT * FROM map_path 
			INNER JOIN map_attribute ON map_path.Map_Attribute_ID = map_attribute.Map_Attribute_ID 
			WHERE UserID='".$Auth['UserID']."'");
			return $Result;
		}
		
		public function insertNewSlot(){
			$Auth = $this->getUserByID();
			set::db("INSERT INTO map (Map_SetID, Map_SubID) VALUES ('".set::idGen()."', '".$Auth['Map_ID']."')");
		}
		
		public function addObject($ID, $SetID){
			$MapID = set::selectOne("SELECT * FROM map WHERE Map_SetID='".$SetID."'");
			set::db("UPDATE map_attribute SET Map_ID = '".$MapID['Map_ID']."' WHERE Map_Attribute_ID='".$ID."'");
		}
		
		public function wayinMap($id, $UserID, $MapID){
			set::db("UPDATE auth SET Map_ID='".$id."' WHERE UserID='".$UserID."'");
			set::db("INSERT INTO map_path (Entry, UserID, Map_Attribute_ID) VALUES ('".set::idGen()."', '".$UserID."', '".$MapID."')");
		}
		
		public function wayoutMap(){
			$Auth = $this->getUserByID();
			set::db("DELETE FROM map_path WHERE UserID='".$Auth['UserID']."' ORDER BY Map_Attribute_ID DESC LIMIT 1");
			$getResult = set::selectOne("
			SELECT * FROM map_path
			INNER JOIN map_attribute ON map_path.Map_Attribute_ID = map_attribute.Map_Attribute_ID
			WHERE map_path.UserID = '".$Auth['UserID']."'
			ORDER BY map_attribute.Map_Attribute_ID DESC LIMIT 1
			");
			set::db("UPDATE auth SET Map_ID='".$getResult['Map_Attribute_SubID']."' WHERE UserID='".$Auth['UserID']."'"); 
		}
	}		