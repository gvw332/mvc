<?php

?>

<!-------------- CONTENU DE LA PAGE "SERVICES" ------------------>
<main id="contenu-services" role="main">


	<!-- Liste déroulante avec les différents services -->
	<section class="liste-deroulante">	
		<select id="liste-services" class="liste-services">
			<optgroup label="Services">
				<option selected value="all">Tous les services</option>
				<option value="1">Pose de gazon</option>
				<option value="2">Débroussaillage</option>
				<option value="3">Tonte de gazon</option>
				<option value="4">Taille de haie</option>
				<option value="5">Elagage</option>
				<option value="6">Tronçonnage</option>
				<option value="7">Evacuation déchets</option>
				<option value="8">Nettoyage terrasse</option>
				<option value="9">Robot tondeuse</option>
			</optgroup>
		</select>
	</section>

	<section class="liste-cards">
		<ul id="mylist">

			<!-- Services de pose de rouleaux de gazon-->
			<li id="pose-de-rouleaux" class="item pose-de-rouleaux">
				<div class="title">Pose de rouleaux de gazon</div>
				<p>
					La pose de rouleaux de gazon est un service professionnel que nous proposons pour vous offrir une pelouse verdoyante et luxuriante dès le premier jour. Voici quelques informations supplémentaires sur notre procédure d'installation.
				</p>
				<br>
				
				<img src="<?php echo ASSETS; ?>images/autres/avant-apres.jpg" alt="jardin avant la pose de gazon et après la pose" />
				<br>
				
				<p>
					<br>
					<strong>Préparation du terrain :</strong> Avant la pose des rouleaux de gazon, nous effectuons une préparation minutieuse du terrain. Cela comprend l'élimination des mauvaises herbes et des pierres, ainsi que le nivellement du sol pour obtenir une surface plane et uniforme. Si nécessaire, nous ajoutons de la matière organique pour améliorer la qualité du sol et favoriser la croissance du gazon.
				</p>		
				
				<p>					
					<strong>Livraison des rouleaux de gazons :</strong> Nous sélectionnons des rouleaux de gazon de haute qualité, cultivés avec soin pour garantir une pelouse saine et esthétique. Nous veillons à ce que les rouleaux soient frais et en bon état pour assurer une reprise rapide et optimale.
				</p>
				<p>
					<strong>Installation des rouleaux :</strong> Lors de la pose des rouleaux de gazon, notre équipe expérimentée veille à ce qu'ils soient parfaitement ajustés et bien serrés. Cela permet d'éviter les espaces entre les rouleaux, assurant ainsi une surface uniforme et sans faille.
				</p>
				<p>
					<strong>Arrosage initial :</strong> Une fois les rouleaux de gazon installés, nous procédons à un arrosage initial abondant pour favoriser l'enracinement et la bonne adhérence du gazon au sol. Cela permet au gazon de s'établir rapidement et de commencer à pousser de manière saine.
				</p>


				<br>
					<button class="bouton-conseils-services" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEntretienGazon" aria-expanded="false" aria-controls="collapseEntretienGazon">
						Conseils d'entretien cliquez ici
					</button>
				<br>

				</p>
				<div class="collapse" id="collapseEntretienGazon">
					<p class="collapseEntretienGazon">Une fois que le gazon est posé, il est important de prendre quelques mesures pour assurer sa croissance et son entretien optimal. Voici ce que vous devez faire :

						<br>
						<strong>Suivi de l'arrosage :</strong><br> Continuez à arroser votre gazon de manière régulière, surtout pendant les périodes sèches. Il est préférable d'arroser le gazon en profondeur plutôt que superficiellement, pour encourager le développement des racines.
						<br>
						<strong>Tonte régulière :</strong><br>Attendez que le gazon ait atteint une hauteur d'environ 8 à 10 cm avant de procéder à la première tonte. Veillez à régler la hauteur de coupe de la tondeuse pour ne couper que la pointe de l'herbe, et après la première tonte, vous pouvez laisser pousser votre gazon pendant environ une à deux semaines avant de le tondre à nouveau. Cela permettra aux brins d'herbe de se développer.
						<br>
						<strong>Contrôle des mauvaises herbes :</strong><br>Surveillez l'apparition de mauvaises herbes et prenez des mesures pour les éliminer dès leur apparition. Vous pouvez les arracher manuellement ou utiliser des herbicides sélectifs adaptés aux gazons.

						En suivant ces étapes d'entretien, vous pouvez vous assurer que votre gazon reste sain, verdoyant et luxuriant pour profiter d'une pelouse magnifique tout au long de l'année.
					</p>

				</div>
			
				
				<br>




			</li>

			<!-- Services de débroussaillage-->
			<li id="debroussaillage" class="item debroussaillage">
				<div class="title">Débroussaillage</div>
				<img src="<?php echo ASSETS; ?>images/autres/debroussaillage.jpg" alt="débroussaillage" />
				<img src="<?php echo ASSETS; ?>images/autres/debroussaillage-2.jpg" alt="débroussaillage" />
				<br><br>
					<p>
						Le débroussaillage est une étape clé de l'entretien paysager qui vise à éliminer les végétations indésirables et à maintenir la beauté et la sécurité de votre espace extérieur. En éliminant les buissons, les broussailles et les herbes hautes, le débroussaillage permet de prévenir les risques d'incendie, d'améliorer la visibilité et de favoriser la croissance saine des plantes désirées. Grâce à des techniques adaptées et à l'utilisation d'outils spécifiques, nos professionnels du débroussaillage veillent à créer un environnement esthétique et fonctionnel où vous pourrez profiter pleinement de votre jardin en toute tranquillité.
					</p>
					
					
				
			</li>

			<!-- Services de tonte-->
			<li id="tonte" class="item tonte">
				<div class="title">Tonte</div>				
				<img src="<?php echo ASSETS; ?>images/autres/tonte.jpg" alt="tonte de pelouse" />
				<img src="<?php echo ASSETS; ?>images/autres/tonte-2.jpg" alt="tonte de pelouse" />
				<br><br>
				<p>
					La tonte de pelouse est une tâche essentielle pour maintenir un jardin soigné et une pelouse verdoyante. Elle consiste à couper régulièrement l'herbe ou votre gazon à une hauteur optimale, favorisant ainsi sa croissance dense et uniforme. La tonte régulière permet d'éliminer les mauvaises herbes, de stimuler la croissance des brins d'herbe plus forts et de créer une apparence esthétique. En plus de l'aspect visuel, la tonte de pelouse offre d'autres avantages tels que la prévention de l'envahissement de mauvaises herbes, l'amélioration de la résistance de la pelouse face aux maladies et aux ravageurs, ainsi que la promotion de la circulation de l'air et de la pénétration de l'eau dans le sol. Confier la tonte de votre pelouse à des professionnels garantit un résultat impeccable et vous permet de profiter d'un espace extérieur propre et accueillant.
				</p>
				<br>

			</li>

			<!-- Services de taille de haies-->
			<li id="taille-de-haies" class="item taille-de-haies">
				<div class="title">Taille de haies</div>
				<img src="<?php echo ASSETS; ?>images/autres/taille-de-haies.jpg" alt="taille de haies" />
				<img src="<?php echo ASSETS; ?>images/autres/taille-de-haies-2.jpg" alt="taille de haies" />
				<br><br>
				<p>
					La taille de haie est une opération importante pour maintenir l'aspect esthétique et la santé des haies dans un jardin. Elle consiste à tailler les branches et les feuilles des haies de manière régulière et précise. La taille permet de contrôler la croissance des haies, de les maintenir dans une forme souhaitée et de favoriser une densité uniforme. En plus de l'aspect esthétique, la taille de haie présente plusieurs avantages pratiques. Elle permet de limiter la propagation des haies en les maintenant à une taille adaptée à l'espace disponible. Elle favorise également la densification des haies, ce qui offre une meilleure intimité et une protection contre les regards indiscrets. De plus, la taille régulière permet de prévenir l'apparition de maladies et d'infestations d'insectes nuisibles en éliminant les parties endommagées. Confier la taille de vos haies à des professionnels garantit un travail soigné et précis, assurant ainsi la santé et la beauté de vos haies tout au long de l'année.
				</p>

			</li>

			<!-- Services d'élagage-->
			<li id="elagage" class="item elagage">
				<div class="title">Élagage</div>
				<img src="<?php echo ASSETS; ?>images/autres/elagage.jpg" alt="élagage" />
				<img src="<?php echo ASSETS; ?>images/autres/elagage-2.jpg" alt="élagage" />
				<br><br>
				<p>
					L'élagage est une opération essentielle pour assurer la santé, la sécurité et l'esthétique des arbres dans un jardin. Il consiste à couper les branches d'un arbre de manière sélective, en suivant des techniques spécifiques. L'élagage peut avoir plusieurs objectifs, tels que l'élimination des branches mortes, malades ou endommagées, la réduction de la densité de la couronne pour favoriser la pénétration de la lumière et de l'air, et le façonnage de l'arbre pour lui donner une forme esthétique et équilibrée. L'élagage peut également être nécessaire pour éviter les conflits avec les structures environnantes, comme les bâtiments, les lignes électriques ou les routes. Une bonne pratique d'élagage nécessite des connaissances approfondies des différentes espèces d'arbres, de leurs besoins spécifiques et des techniques appropriées pour effectuer les coupes. Il est recommandé de faire appel à des professionnels qualifiés pour réaliser l'élagage, afin d'assurer un travail sûr et de préserver la santé et la beauté de vos arbres sur le long terme.
				</p>
				
			</li>

			<!-- Services de tronçonnage -->
			<li id="tronconnage" class="item tronconnage">
				<div class="title">Tronçonnage</div>
				<img src="<?php echo ASSETS; ?>images/autres/tronconnage.jpg" alt="tronçonnage" />
				<img src="<?php echo ASSETS; ?>images/autres/tronconnage-2.jpg" alt="tronçonnage" />
				<br><br>
				<p>
					Le tronçonnage est une opération spécialisée dans l'abattage et la découpe des arbres. Il s'agit d'une tâche complexe qui nécessite l'utilisation d'outils et d'équipements appropriés, ainsi que des compétences techniques. Le tronçonnage est souvent nécessaire dans les situations où un arbre est malade, dangereux, mort ou lorsque son abattage est requis pour des raisons esthétiques ou de construction. Lors du tronçonnage, l'arbre est abattu de manière contrôlée et sécurisée, en utilisant des techniques telles que l'ébranchage, la coupe de la souche et le débitage du tronc en sections gérables. Les professionnels du tronçonnage sont formés pour évaluer les conditions environnementales, les risques potentiels et pour planifier l'opération en conséquence. Ils veillent également à la protection des personnes, des biens et de l'environnement lors de l'exécution de leur travail. Le tronçonnage doit être confié à des experts qualifiés pour garantir un résultat sûr et efficace, tout en respectant les normes de sécurité en vigueur.
				</p>

			</li>

			<!-- Services d'évacuation des déchets-->
			<li id="evacuation-dechets" class="item evacuation-dechets">
				<div class="title">Évacuation des déchets</div>
				<img src="<?php echo ASSETS; ?>images/autres/evac.png" alt="évacuation des déchets par remorque" />
				<br><br>
				<p>
					Garantissant une finition impeccable, nous nous occupons de l'évacuation des déchets de jardinage. 
					Pour tout ce qui est des déchets en bois nous avons a disposition une broyeuse pour faire de joli parterres. 
				</p>
				
			</li>

			<!-- Services de nettoyage terrasses-->
			<li id="nettoyage-terrasses" class="item nettoyage-terrasses">
				<div class="title">Nettoyage terrasses</div>
				<img src="<?php echo ASSETS; ?>images/autres/nettoyage-terrasse.jpg" alt="nettoyage d'une terrasse avec le karcher">
				<img src="<?php echo ASSETS; ?>images/autres/terrasse-avant-apres.jpg" alt="terrasse avant nettoyage terrasse après nettoyage">
				<br><br>
				<p>
					Le nettoyage de la terrasse extérieure est une étape importante pour préserver son aspect esthétique et assurer sa durabilité. Au fil du temps, les terrasses peuvent accumuler de la saleté, des taches, des dépôts de végétation et d'autres débris qui peuvent ternir leur apparence. Le nettoyage régulier de la terrasse permet d'éliminer ces impuretés, de prévenir l'apparition de moisissures et de maintenir une surface sûre et accueillante. Selon le matériau de votre terrasse, des techniques spécifiques peuvent être utilisées, telles que le balayage, le lavage à haute pression ou l'utilisation de produits de nettoyage adaptés. Faire appel à des professionnels du nettoyage de terrasse extérieure garantit un résultat optimal et vous permet de profiter pleinement de votre espace extérieur dans un cadre propre et bien entretenu.
				</p>				
			</li>

			<!-- Services d'installation de kit et robot tondeuse -->
			<li id="robots-tondeuse" class="item robots-tondeuse">
				<div class="title">Robot tondeuse + kit installation</div>
				<img src="<?php echo ASSETS; ?>images/autres/robot.jpg" alt="robot tondeuse" />
				<img src="<?php echo ASSETS; ?>images/autres/robot-2.jpg" alt="robot tondeuse" />
				<br><br>
				<p>
					L'achat d'un robot tondeuse présente de nombreux avantages pour l'entretien de votre pelouse. Tout d'abord, il offre un gain de temps considérable, car il se charge de tondre votre gazon de manière autonome, sans nécessiter votre présence. Cela vous permet de vous consacrer à d'autres activités tout en ayant une pelouse parfaitement entretenue. De plus, le robot tondeuse est programmable, ce qui vous permet de définir les plages horaires de tonte selon vos besoins.

					Tout d'abord pour installer le kit de câble du robot tondeuse, il faut délimiter la zone de tonte en installant le câble périphérique autour de votre pelouse. Ce câble servira de guide au robot tondeuse pour délimiter la zone à tondre et éviter les obstacles. Il est important de bien fixer le câble au sol à l'aide des piquets fournis, en veillant à ce qu'il soit tendu et sans plis.

					En ce qui concerne le chargeur, il doit être placé dans un endroit accessible et protégé des intempéries. Généralement, il est installé près de la station de charge du robot tondeuse. Assurez-vous de suivre les instructions spécifiques du fabricant pour le raccordement électrique du chargeur.

					Avant de mettre en marche votre robot tondeuse, il est recommandé de faire un test de fonctionnement pour vous assurer que tout est correctement installé et configuré.
				</p>
				
			</li>
		</ul>

	</section>
</main>

<script src="<?php echo ASSETS; ?>javascript/services.js"></script>

<!-------------- FIN DU CONTENU DE LA PAGE "SERVICES" ------------------>