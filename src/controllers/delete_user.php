<?php
session_start();
requireValidSession();

$exception = null;
$userData = [];

if ($_GET['delete']) {
	$user = User::getOne(['id' => $_GET['delete']]);
	$userData = $user->getValues();
}

if (count($_POST) > 0 && $_GET['delete']) {
	try {
		User::deleteById($_GET['delete']);
		addSuccessMsg('Usuário excluído com sucesso.');
	} catch (Exception $e) {
		if (stripos($e->getMessage(), 'FOREIGN KEY')) {
			addErrorMsg('Não é possível excluir o usuário com registros de ponto.');
		} else {
			$exception = $e;
		}
	}
}

loadTemplateView('delete_user', $userData + ['exception' => $exception]);
