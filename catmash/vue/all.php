<div class="d-flex flex-wrap" style="margin-left: 6%;margin-right: 6%;margin-top: 1%;">
<?php

	$cats = get_all();
	foreach ($cats as $id) {

		// récupération de tout les chats (image + id)
		$chaine = json_decode(file_get_contents("https://latelier.co/data/cats.json"));

		//boucle pour aficher chaque chats (les 12 meilleures)
		foreach($chaine->images as $cat) {
			
			//comparaison pour afficher la bonne image selon l'id de la bdd
			if($id['id'] == $cat->id){
				echo '<div class="photo"> <img class="rounded mx-auto d-block" style="width:200px;height:200px;" src="'.$cat->url . '"><br/>';	
				echo '<p class="text-center"> '.$id['points']. ' </p><br/> </div>';
			}
		}
	}
?>
</div>