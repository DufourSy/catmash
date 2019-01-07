<?php
	$list = get_id_cat();
	
		// récupération de tout les chats (image + id)
		$chaine = json_decode(file_get_contents("https://latelier.co/data/cats.json"));

		foreach($chaine->images as $cat) {

			//comparaison pour afficher la bonne image selon l'id de la bdd
			if($list == $cat->id){
				?>
				<div class="d-flex justify-content-center" style="margin-top: 10%;">
					<a href="/catmash/?vue=vote">
						<!-- Button next -->
						<button style="width: 150px;height: 150px;border-radius: 50%;" class="btn btn-light"><img style="width: 70px;" src="/catmash/images/pouce_n.png"></button>
					</a>
					<div style="background-color: white;padding: 10px;height: 400px;">			
				<?php
				//affichage de l'image du chat
				echo '<img  src="'.$cat->url . '" class="rounded mx-auto d-block" style="height:300px;width:300px;">';	
				?>
					</div>
					<form action="/catmash/modele/pointeur.php" method="post">
						<input type="text" name="id" value="<?php echo $list ?>" hidden>
						<input type="text" name="points" value="1" hidden>
						<!-- Button +1 avec envoi de données cachés -->
						<button style="width: 150px;height: 150px;border-radius: 50%;" class="btn btn-dark" type="submit"><img style="width: 70px;" src="/catmash/images/pouce_p.png"></button>
					</form>
				</div>
				<?php
			}
		}
	?>
