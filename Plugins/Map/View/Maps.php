<tr>
	<td colspan="2">
		<button onclick="MapsTable('0', 'null', 'wayout')" type="button" class="btn btn-outline-danger btn-block" 
		<?php if($UserMapID == 0){ ?>
			disabled
		<?php } ?>
		>Върни се</button>
	</td>
</tr>
<?php foreach ($Result as $value) { ?>
	<tr>
		<?php if(!$value['Map_ID']){ ?>
			<td>
				<button 
					onclick="go('Map', 'Objects', 'Index', '.modal-content', {id:'<?php echo $value['Map_SetID']; ?>'});" 
					data-toggle="modal" 
					data-target="#Modal" 
					class="btn btn-outline-warning admin"
					>Свободно място
				</button>

			</td>
			<td><button onclick="MapsTable('<?php echo $value['Map_SetID']; ?>','null', 'delete')" type="button" class="btn btn-danger admin">Изтриване</button></td>
			<?php } else { ?>
			<td><?php echo $value['Map_Attribute_Name']; ?></td>
			<td><button onclick="MapsTable('<?php echo $value['Map_Attribute_ID']; ?>', 'null', 'remove')" type="button" class="btn btn-warning btn-block admin">Премахни</button></td>
			<?php if($value['Map_Attribute_SubID'] != 0){ ?>
				<td><button onclick="MapsTable('<?php echo $value['Map_Attribute_SubID']; ?>', '<?php echo $value['Map_Attribute_ID']; ?>', 'wayin')" type="button" class="btn btn-outline-success btn-block">Влез</button></td>
			<?php } ?>
		<?php } ?>
	</tr>
<?php } ?>
<tr>
	<td colspan="2">
		<button onclick="MapsTable('null', 'null', 'addSlot')" class="btn btn-outline-success btn-block admin">Добави слот</button>
	</td>
</tr>