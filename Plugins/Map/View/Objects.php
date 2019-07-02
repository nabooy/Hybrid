<div class="list-group">
	<?php foreach ($Result as $value) { 
		if(!$value['Map_ID']){
		?>
		<ul class="list-unstyled">
			<li class="media">
				<div class="media-body">
					<nav class="navbar navbar-light bg-light">
						<img width="64" src="<?php echo $value['Map_Attribute_IMG']; ?>" class="mr-3" alt="Lodaing...">
						<a class="navbar-brand"><?php echo $value['Map_Attribute_Name'] ?></a>
						<form class="form-inline" action="#">
							<button class="btn btn-secondary" onclick="MapsTable('<?php echo $value['Map_Attribute_ID']; ?>', 'null', '<?php echo $MapID; ?>'); $('#Modal').modal('hide')">Добави</button>
						</form>
					</nav>
				</div>
			</li>
		</ul>
	<?php }} ?>
</div>
<?php if($value['Map_ID']){ ?>
	<center>
		<h1>Empty</h1>
	</center>
<?php } ?>