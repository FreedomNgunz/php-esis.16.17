<?php
	require_once('tache.class.php');
	require_once('tache.dao.php');

	if(isset($_GET['id'])
		and !empty($_GET['id'])) {		
		$fdao = new TacheDAO();
		$fdao->Delete($_GET['id']);		
		header('Location: taches.php');
		
		
	} else {
		echo 'Erreur dans les données envoyées';
	}

?>