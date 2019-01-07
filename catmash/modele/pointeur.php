<?php
	//connexion à la bdd 
	$user = 'root';
	$pass = '';
	$connexion = new PDO('mysql:host=localhost;dbname=cat', $user, $pass);
	
	//récupération des points
	$stmt = $connexion ->query("SELECT points FROM classement WHERE id='".$_POST['id']."'");
	$points = $stmt->fetch();

	//addition des points
	$compteur = intval($points['points']) + 1;

	//ajout des points
	$req = $connexion ->prepare("UPDATE classement SET points =".$compteur." WHERE id='".$_POST['id']."'");
	$req->execute();

	//redirection
	header('Location: http://localhost/catmash/?vue=vote');
?>