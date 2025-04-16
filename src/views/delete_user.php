<main class="content">
	<?php
	renderTitle(
		'Deletando Usuário',
		'Verifique os dados para excluir o usuário.',
		'icofont-trash'
	);

	include(TEMPLATE_PATH . '/messages.php');
	?>

	<form action="#" method="post">
		<?php if ($id): ?>
			<input type="hidden" name="id" value="<?= $id ?>">
		<?php endif ?>
		<div class="form-row">
			<div class="form-group col-md-6">
				<input type="text" class="form-control" readonly value="<?= $name ?>">
			</div>
			<div class="form-group col-md-6">
				<input type="email" class="form-control" readonly value="<?= $email ?>">
			</div>
		</div>
		<div>
			<button
				class="btn btn-danger">Excluir</button>
		</div>
	</form>

</main>