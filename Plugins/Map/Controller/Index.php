<?php 
	set::Model('Map', 'MapModel');
	class Index extends MapModel{
	
		public function run(){
			set::view('Map', 'index', []);
			set::view('Resurce', 'Modal', []);
		}
		
		public function mapsPath(){
			set::view('Map', 'Paths', [
				'Result'=>$this->allResultMapPath()
			]);
		}
		
		public function Maps(){
			$Auth = $this->getUserByID();
			if($Auth['Map_ID']!=0){
				$this->mapsPath();
			}
			set::view('Map', 'Maps', [
				'UserMapID'=>$Auth['Map_ID'],
				'Result'=>$this->allResult()
			]);
		}
		
		public function actionMaps($data){
			$Auth = $this->getUserByID();
			if($data['action']=='delete' ){ 
				set::db("DELETE FROM map WHERE Map_SetID='".$data['id']."'"); 
			}elseif($data['action']=='remove' ){ 
				set::db("UPDATE map_attribute SET Map_ID = NULL WHERE Map_Attribute_ID='".$data['id']."'"); 
			}elseif($data['action']=='wayin'  ){ 
				$this->wayinMap($data['id'], $Auth['UserID'], $data['attId']);
			}elseif($data['action']=='wayout' ){ 
				$this->wayoutMap();
			}elseif($data['action']=='addSlot'){ 
				$this->insertNewSlot(); 
			}else{ 
				$this->addObject($data['id'], $data['action']); 
			}
			$this->Maps();
		}
		
		public function Objects($a){
			set::view('Map', 'Objects', [
				'MapID'=>$a['id'],
				'Result'=>$this->allResultAttribute()
			]);
		}
	}