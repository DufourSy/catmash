<div class="d-flex flex-wrap" style="margin-left: 6%;margin-right: 6%;margin-top: 1%;">
<?php

	$cats = get_best_cats();
	foreach ($cats as $id) {

		// récupération de tout les chats (image + id)
		$chaine = json_decode(file_get_contents("https://latelier.co/data/cats.json"));

		//boucle pour aficher chaque chats (les 12 meilleures)
		foreach($chaine->images as $cat) {
			
			//comparaison pour afficher la bonne image selon l'id de la bdd
			if($id['id'] == $cat->id){
				echo '<div class="photo"> <img class="rounded mx-auto d-block" style="width:200px;height:200px;" src="'.$cat->url . '"><br/>';	
				echo '<p class="text-center" style="font-size:25px;"> '.$id['points']. ' </p><br/> </div>';
			}
		}
	}
?>
	<a href="/catmash/?vue=all">
		<!-- Button voir tout les chats -->
		<button style="width: 150px;height: 150px;border-radius: 50%;" class="btn btn-secondary">Voir tout les chats</button>
	</a>
</div>