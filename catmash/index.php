<?php


//appel de la barre de navigation + titre etc
include __DIR__ ."/vue/header.php";

//gestion des vues
if (!empty($_GET['vue'])) {
	include __DIR__ ."/controlleur/".$_GET["vue"].".php";
	include __DIR__ ."/vue/".$_GET["vue"].".php";
}else{
	include __DIR__ ."/controlleur/home.php";
	include __DIR__ ."/vue/home.php";
}
?>
	
</body>