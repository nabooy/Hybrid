<tr>
	<td colspan="2">
		<?php if($UserMapID != 0){ ?>
			<button onclick="MapsTable('0', 'null', 'wayout')" type="button" class="btn btn-outline-danger btn-block" >Върни се</button>
		<?php } ?>
	</td>
</tr>
<?php foreach ($Result as $value) { ?>
	<?php if(!$value['Map_ID']){ ?>
		<tr>
			<td>
				<button 
				onclick="go('Map', 'Objects', 'Index', '.modal-content', {id:'<?php echo $value['Map_SetID']; ?>'});" 
				class="btn btn-outline-warning button-free-space admin"
				data-toggle="modal" 
				data-target="#Modal" >
					Свободно място
				</button>
			</td>
		</tr>
		<tr>
			<td>
				<button 
				onclick="MapsTable('<?php echo $value['Map_SetID']; ?>','null', 'delete')" 
				type="button" 
				class="btn btn-danger admin">
					Изтриване
				</button>
			</td>
		</tr>
		<?php } else { ?>
		<tr>
			<td>
				<?php
					set::view('Map', 'ObjectContent', [
					'MapID'=>false,
					'ForMapID'=>$value['Map_ID'],
					'ForMapAID'=>$value['Map_Attribute_ID'],
					'ForMapAName'=>$value['Map_Attribute_Name'],
					'ForMapAIMG'=>$value['Map_Attribute_IMG']
					]);	
				?>
			</td>
		</tr>
		<tr>
			<td>
				<button 
				onclick="MapsTable('<?php echo $value['Map_Attribute_ID']; ?>', 'null', 'remove')" 
				type="button" 
				class="btn btn-warning admin">
					Премахни
				</button>
				<?php if($value['Map_Attribute_SubID'] != 0){ ?>
					<button 
					onclick="MapsTable('<?php echo $value['Map_Attribute_SubID']; ?>', '<?php echo $value['Map_Attribute_ID']; ?>', 'wayin')" 
					type="button" 
					class="btn btn-outline-success">
						Влез
					</button>
				</td>
			</tr>
		<?php } ?>
	<?php } ?>
<?php } ?>
<tr>
	<td colspan="2">
		<button onclick="MapsTable('null', 'null', 'addSlot')" class="btn btn-outline-success btn-block admin">Добави слот</button>
	</td>
</tr>	