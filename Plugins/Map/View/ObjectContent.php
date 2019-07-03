<ul class="list-unstyled listWithBodyContendObject">
	<li class="media">
		<div class="media-body">
			<nav class="navbar navbar-light bg-light">
				<img width="64" src="<?php echo $ForMapAIMG ?>" class="mr-3" alt="Lodaing...">
				<a class="navbar-brand"><?php echo $ForMapAName ?></a>
				<form class="form-inline" action="#">
					<?php if($MapID){ ?>
						<button class="btn btn-secondary" 
						onclick="
						MapsTable('<?php echo $ForMapAID ?>', 'null', '<?php echo $MapID ?>'); 
						$('#Modal').modal('hide');
						">Добави</button>
					<?php } ?>
				</form>
			</nav>
		</div>
	</li>
</ul>
