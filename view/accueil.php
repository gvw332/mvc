<?php

?>


<!------------ CONTENU DE LA PAGE "ACCUEIL.PHP" ------------>
 
	<!-- modal-cookies -->
	<div id="cookie-modal" class="modal">
		<div class="modal-content">
			<h2>Politique de cookies</h2>
			<p>Cher utilisateur,</p>
			<p>Nous souhaitons vous informer que notre site internet n'utilise pas de cookies. <br>Nous respectons votre vie privée et nous nous engageons à garantir<br> la confidentialité de vos informations sans recourir à l'utilisation de cookies.
				Cordialement,<br>gvw-tech
			</p>
			<button class="bouton-fermer-modal" style="border:grey;" id="accept-cookies-btn">Fermer</button>
		</div>
	</div>



<main id="contenu-accueil" style="background-color: rgb(138, 220, 113);" role="main">

	<!-- zone d'accroche accueil -->
	<section class="zone-accroche">

		<div class="carousel">
			<img class="afficher active" src="<?php echo ASSETS; ?>images/accueil/rouleaux-tracteur-2-web.jpg" alt="un champ avec un tracteur et une palette de rouleaux de gazon" />
			<img class="afficher" src="<?php echo ASSETS; ?>images/accueil/jardin-arche-accueil-web.jpg" alt="jardin bordé par des haies en sapin">
			<img class="afficher" src="<?php echo ASSETS; ?>images/accueil/image3-carousel.jpg" alt="jardin fleuri avec beaucoup de buissons différents">
			<p class="hidden-text-accroche hidden">Profitez pleinement de votre jardin</p>
			<p class="hidden-text-accroche hidden">Selon vos goûts et préférences</p>
			<p class="hidden-text-accroche hidden">Votre extérieur<br> sera fait avec style et confort</p>		
				<a href="contact">
					<button class="bouton-contact">Contactez-nous</button> 
				</a>	
		</div>
		
		<div class="fleche-gauche">&lt;</div>
		<div class="slogan"></div>
		<div class="fleche-droite">&gt;</div>
		<div class="controls">
			<div class="bullets"></div>
		</div>

	</section>

	<!-- Services accueil -->
	<section class="services-accueil">

		<h2>Que proposons-nous?</h2>
		<p>Plongez dans l'univers de notre expertise en création paysagiste spécialisée dans la pose de gazon et laissez notre équipe passionnée transformer votre espace extérieur en un havre de verdure. La magie opère alors, et chaque brin d'herbe compte pour créer un jardin à couper le souffle.</p>
			<div class="image-services-accueil">
				<img src="<?php echo ASSETS; ?>images/autres/tools.png" alt="illustration des outils du jardinier" />
			</div>
		<div class="services-accueil-flex">
			<div class="liste-services-accueil">
				<ul>
					<li>
						<strong>Création de parcs et jardins:</strong><br>Nous concevons et réalisons des jardins sur mesure en fonction de vos goûts et besoins. De la préparation du terrain à la plantation de végétaux soigneusement sélectionnés, nous nous occupons de tout pour créer un espace extérieur unique qui correspond à votre vision.
					</li>
					<li>
						<strong>Entretien de parcs et jardins:</strong><br>Confiez-nous l'entretien de votre jardin pour le maintenir en parfait état tout au long de l'année . Nos services d'entretien régulier comprennent la tonte de la pelouse, la taille des arbres et arbustes, ainsi que d'autres travaux nécessaires pour préserver la beauté de votre jardin.
					</li>
				</ul>
			</div>
		</div>
		<p>Pour plus d'informations sur nos services <br>cliquez ci-dessous</p>
		<a href="services" class="btn-services-accueil">Nos services</a>		
	</section>

	<!-- Spécialités accueil -->
	<section class="specialites-accueil">

		<h2>Notre spécialité:<br> Pose de rouleaux de gazon</h2>
		<p>Nous sommes spécialisés dans la pose de rouleaux de gazon pour les parcs et jardins de toutes tailles et utilisons uniquement des rouleaux de gazon de haute qualité pour garantir un résultat magnifique et durable.</p>
		<a href="devis"><img class="banniere" src="<?php echo ASSETS; ?>images/accueil/banniere.jpg" alt="pub pour réserver des rouleaux de gazon avec numéro de téléphone et nom du site internet" />
		</a>
		<br>
		<br>
		<br>
		<p>Nous nous occupons également de la préparation du terrain avant la pose de gazon, en éliminant les
			mauvaises herbes et en nivelant le sol si nécessaire. Nous sommes fiers de notre travail et garantissons la satisfaction de nos clients.
		</p>
		<br>
		<div class="images-specialites-accueil">
			<img src="<?php echo ASSETS; ?>images/autres/slider-2.jpg" alt="jardinier entrain de poser ses rouleaux de gazon" />
		</div>
		<br>
		<br>
		<a href="services" class="btn-specialites-accueil">Plus d'infos ? C'est ici !</a>

	</section>

	<!-- Actualités accueil -->

	<section class="actualites-accueil">

		<h2>Nos dernières actualités</h2>
		<p>Découvrez les dernières actus et mises à jour de notre communauté de jardiniers, présentées par notre partenaire Gvw-Tech. Nous publions régulièrement des articles, des photos et des vidéos pour vous inspirer dans la création et l'entretien de votre jardin.</p>
		<img src="<?php echo ASSETS; ?>images/accueil/image-actualites-accueil.jpg" alt="image de fleurs et d'outils de jardinage" />
		<a href="actualites" class="btn">Voir toutes les actualités</a>

	</section>
	

	<!-- Estimation devis accueil-->
	<section class="pre-devis">

		<h2>Estimation<br>de devis en ligne</h2>
		<p>Nous offrons un système pratique d'estimation de devis en ligne pour vous aider à estimer le coût de la création de votre terrain.<br> Il vous suffit de vous connecter et de remplir les champs (exprimé en surface), ensuite vous pourrez télécharger directement ce devis personnalisé en version pdf.</p>
		<br>
		<img src="<?php echo ASSETS; ?>images/accueil/facture.jpg" alt="illustration d'un pré-devis gvw-tech"/>
		<br>
		<p>Ceci est une "estimation de devis" .
		<p>Pour commencer, cliquez sur le bouton ci-dessous:</p>
		<br>
		<a href="devis" class="btn">Obtenir une estimation</a>

	</section>
	<br>
	
</main>

<script src="<?php echo ASSETS; ?>javascript/modal-cookies.js" defer></script>
<script src="<?php echo ASSETS; ?>javascript/carousel.js" defer></script>


<!------------ FIN DE CONTENU DE LA PAGE "ACCUEIL.PHP" ------------>