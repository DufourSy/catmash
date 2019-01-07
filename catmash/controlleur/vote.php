<?php
function get_id_cat(){
//connexion à la bdd 
	$user = 'root';
	$pass = '';
	$connexion = new PDO('mysql:host=localhost;dbname=cat', $user, $pass);

	//sectionne un id de chat aléatoire dans la bdd
	$stmt = $connexion ->query("SELECT id FROM classement order by RAND() limit 1");
	$list = $stmt->fetch();	

	//retourne l'id du chat
	return $list['id'];
}
