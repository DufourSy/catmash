<?php
function get_best_cats(){
//connexion à la bdd 
	$user = 'root';
	$pass = '';
	$connexion = new PDO('mysql:host=localhost;dbname=cat', $user, $pass);
	$req = $connexion ->query("SELECT id, points FROM classement order by points DESC limit 0,12");
	$ids = $req->fetchAll();

	//retourne la liste des 12 "meilleures" chats
	return $ids;
}
?>