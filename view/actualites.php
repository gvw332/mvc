<?php
	$formatImage = ['jpg', 'jpeg', 'png', 'gif'];
	$formatVideo = ['mp4', 'avi', 'mov']
?>

<!---------- CONTENU DE LA PAGE "actualites.php" ---------->

<main id="contenu-actualites" role="main">	
	
	
	<h1>Nos actualités</h1>	
	<?php if (Session::$is_admin) : ?>
		<a href="actu-update">
			<button class="bouton-page-actu"><i class="fa-solid fa-file-circle-plus"></i> Ajouter une actualité</button>
		</a>
	<?php endif; ?>
	
	<section class="englobe-les-cartes-actualites">
		
		<?php foreach ($params as $infos) : ?>
			<article class="carte-actualites">

				<?php if (!empty($infos->medias)) : ?>
					<?php $liste = explode(',', $infos->medias); ?>
					<?php foreach ($liste as $picture) : ?>
						<?php if (in_array(pathinfo($picture, PATHINFO_EXTENSION), $formatImage)) : ?>
							<img class="img-card" src="<?php echo MEDIAS . $picture ?>" alt=" Image de la carte">
						<?php else : ?>
							<video controls>
								<source src="<?php echo MEDIAS . $picture ?>" type="video/mp4">
								Votre navigateur ne supporte pas la lecture de vidéos HTML5.
							</video>
						<?php endif; ?>
					<?php endforeach; ?>
				<?php endif; ?>

				<div class="contenu-carte">
					<div class="contenu-carte-titre-et-texte">
						<h5 class="titre-carte-actu"><?= $infos->titre; ?></h5>
						<p class="contenu-paragraphe-carte hidden"><?= $infos->contenu; ?></p>
						<p class="date-carte-actu"><?= model_actualites::dateJMA($infos->modified_date); ?></p>
					</div>
					<?php if (Session::$is_admin) : ?>
						<div class="carte-en-ligne">
							<?= $infos->enligne == 1 ? 'En ligne' : 'Pas en ligne'; ?>
						</div>
						<div class="boutons-supp-modif">
							<form action="actu-delete" method="post">
								<input type="hidden" value="<?= $infos->id ?>" name="id">
								<button class="btn btn-danger" type="submit" onclick="return confirm('Voulez-vous vraiment supprimer ?');">Supprimer</button>
							</form>
							<form action="actu-update" method="post">
								<input type="hidden" value="<?= $infos->id ?>" name="id">
								<button class="btn btn-primary" type="submit">Modifier</button>
							</form>
						</div>
					<?php endif; ?>
				</div>
			</article>
		<?php endforeach ?>

		<?php if (isset($_SESSION['reload'])) {
			unset($_SESSION['reload']);
		} ?>
	</section>
	<br><br>
</main>

<script src="<?php echo ASSETS; ?>javascript/actualites.js"></script>
<!---------- FIN DU CONTENU DE LA PAGE "actualites.php" ------------>

