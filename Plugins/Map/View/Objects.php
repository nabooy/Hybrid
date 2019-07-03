<div class="list-group">
	<?php foreach ($Result as $value) { 
		if(!$value['Map_ID']){ 
			set::view('Map', 'ObjectContent', [
				'MapID'=>$MapID,
				'ForMapID'=>$value['Map_ID'],
				'ForMapAID'=>$value['Map_Attribute_ID'],
				'ForMapAName'=>$value['Map_Attribute_Name'],
				'ForMapAIMG'=>$value['Map_Attribute_IMG']
			]);
		} else {
			
		}
	} ?>
</div>