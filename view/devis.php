<?php
if (isset($_SESSION['login'])) {
	$login = $_SESSION['login'];
	$niveau = $_SESSION['niveau'];
}
?>

<!-------------- CONTENU DE LA PAGE "DEVIS.PHP" ------------------>

<main id="contenu-devis" role="main">
	<!-- Connexion avec javascript devis.js-->
	<div type="hidden" class='hidden' id="connected"><?php echo $login; ?></div>


	<!-- Liste déroulante des devis -->
	<section class="liste-deroulante-devis">		
		<select id="liste-devis" class="liste-devis">
			<optgroup label="Devis">
				<option selected value="all">
					Tous les services
				</option>

				<option value="1">
					<div class="devis-option">
						<div class="nom-devis">Gazon</div>
						<div class="prix-devis total-ligne-1"></div>
					</div>
				</option>
				<option value="2">
					<div class="devis-option">
						<div class="nom-devis">Débroussaillage</div>
						<div class="prix-devis total-ligne-3"></div>
					</div>
				</option>
				<option value="3">
					<div class="devis-option">
						<div class="nom-devis">Tonte de gazon</div>
						<div class="prix-devis total-ligne-2"></div>
					</div>
				</option>
				<option value="4">
					<div class="devis-option">
						<div class="nom-devis">Taille de haie</div>
						<div class="prix-devis total-ligne-4"></div>
					</div>
				</option>
				<option value="5">
					<div class="devis-option">
						<div class="nom-devis">Elagage</div>
						<div class="prix-devis total-ligne-5"></div>
					</div>
				</option>
				<option value="6">
					<div class="devis-option">
						<div class="nom-devis">Tronçonnage</div>
						<div class="prix-devis total-ligne-6"></div>
					</div>
				</option>
				<option value="7">
					<div class="devis-option">
						<div class="nom-devis">Evacuation déchets</div>
						<div class="prix-devis total-ligne-7"></div>
					</div>
				</option>
				<option value="8">
					<div class="devis-option">
						<div class="nom-devis">Nettoyage terrasse</div>
						<div class="prix-devis total-ligne-8"></div>
					</div>
				</option>
				<option value="9">
					<div class="devis-option">
						<div class="nom-devis">Robot tondeuse</div>
						<div class="prix-devis total-ligne-9"></div>
					</div>
				</option>
			</optgroup>
		</select>
	</section>

	<!-- Totaux de la liste déroulante + bouton devis -->
	<section class="totaux-liste-devis" id="totaux">
		<div class="prix-total" id="total">Total: 0</div>
		<form id="form-devis" action="devis.ctrl" method='POST'>
			<input class="hidden" type="text" name="qty" value='0'>
			<input class="hidden" type="text" name="prix" value='0'>
			<input class="hidden" type="text" name="tot" value='0'>
			<input class="hidden" type="text" name="frais" value='0'>

			<button id="bouton-devis" type="submit" class="bouton-devis" disabled>Télécharger le devis</button>
			<p>Connectez-vous, ensuite remplissez le/les champs pour avoir accès au téléchargement du devis</p>
		</form>
	</section>

	<!-- Tableaux des prix de la pose de gazon -->
	<article class="detail-devis" id="card-1">
		<figure class="card-devis">
			<figure class="paragraphe-etoile">

				<h2 class="titre-card">Rouleaux de gazon</h2>
				<p class="w-50 mx-auto text-center">
					<button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseInfosGazon" aria-expanded="false" aria-controls="collapseInfosGazon">
						Plus d'infos ? Cliquez ici 
					</button>
				</p>
				<div class="collapse" id="collapseInfosGazon">
					<div class="card card-body">

						<strong>Pour info :</strong>
						<br>
						<strong>1 rouleau</strong> = 1m² (1,73m x 0,58m) = +/- 15kg<br>
						<strong>1 palette</strong> = max 70-80m² = 1100-1200kg
						<br><br>
						Les rouleaux sont fournis sur des palettes cautionnées de 1,15m sur 1,15m.
						<br>
						Cette caution vous est remboursée dès que nous récupérons les palettes.
						<br><br>
						Nous pouvons livrer tous les jours de la semaine (week-end compris, si prévu à l'avance).<br>
						Le prix de la livraison dépend du nombre de m² et du nombre de km que nous devrons effectuer :
						<br><br><strong>- Jusqu'à 25m²</strong> Nous livrons par petite camionnette avec déchargement manuel;
						<br><strong>- De 26m² à 225m²</strong> Nous livrons par grande camionnette (caution palette à payer);
						<br><strong>- Au dessus de 226m²</strong> Selon la superficie il sera nécessaire de faire venir par camion/grue (caution palette à payer).

						<br>Votre gazon vous sera livré sur des palettes (Caution de 15€ par palette).<br>

						Notre producteur de gazon porduit les rouleaux sur commande.
						<br>
						En temps normal, le délai après commande varie autour de 3 jours.
						<br><br>
						<p><strong> Les prix affichés sont hors TVA (6% pour les rouleaux de gazon, 21% pour le service / main d'oeuvre et 0% pour les palettes en caution).</strong>
						<p>Le pré-devis peut parfois ne pas refléter fidèlement le prix final affiché pour diverses raisons. Par exemple, si votre jardin présente des difficultés d'accès pour nos livraisons ou pour l'acheminement des matériaux nécessaires, ou s'il ne dispose pas des conditions optimales requises, le prix initial peut être sujet à des variations. Il est donc important de prendre en compte ces facteurs potentiels lors de l'évaluation finale des coûts liés à votre projet.</p>
					</div>

				</div>
			</figure>
			<div class="info-etoile-1">
				<h2>Le sigle (*) comprend:</h2>
			</div>
			<br>
			<div class="info-etoile-2">
				<p>- Préparation du terrain <br>- Fournitures des rouleaux <br>- Pose du gazon</p>
			</div>
			<table class="table table-prix" id="table-prix">
				<caption>Insérer votre superficie ci-dessous</caption>
				<thead>
					<tr class="table__header">
						<th>Superficie / m²</th>
						<th>(*) (€ / m²)</th>
						<th>Frais transport</th>
					</tr>
				</thead>
				<tbody>
					<tr class="table__row">
						<td>0 - 25</td>
						<td>5.29</td>
						<td>40</td>
					</tr>
					<tr class="table__row">
						<td>25 - 225</td>
						<td>5.18</td>
						<td>57</td>
					</tr>
					<tr class="table__row">
						<td>225</td>
						<td>5.13</td>
						<td>66</td>
					</tr>
				</tbody>
			</table>


			<table class="table table-resume" id="table-resume">
				<thead>
					<tr class="table__row">
						<th>Superficie</th>
						<td>m²</td>
						<td>
							<input type="number" class="input-tables" id="superficie" name="qty_1" required min="0" max="99999" value='0' >
						</td>
					</tr>
				</thead>
				<tbody>
					<tr class="table__row">
						<th>(*)</th>
						<td>€ / m²</td>
						<td id="label_pu_1">0.00</td>
					</tr>
					<tr class="table__row">
						<th scope="row" abbr="frais">Frais du transport</th>
						<td id="unite">€</td>
						<td id="frais_transport">0.00</td>
					</tr>
					<tr>
						<th id="nb_palette" scope="row" abbr="prix-palette">Prix palette(s)</th>
						<td id="unite">€</td>
						<td id="frais_palette">0.00</td>
					</tr class="table__row">
					<th scope="row" abbr="sous-total">Sous-total</th>
					<td>€</td>
					<td id="total_detail_1">0.00</td>
					</tr>
				</tbody>
			</table>
			</div>
	</article>

	<!-- Tableaux des prix du débroussaillage-->
	<article class="detail-devis" id="card-2">
		<div class="card-devis">
			<h2 class="titre-card">Débroussaillage</h2>

			<input name="prix_2" id="prix_2" type="text" value="2" class="prix" hidden readonly>

			<table class="table table-resume">

				<thead>
					<tr class="table__header">
						<th>Superficie</th>
						<th>Prix</th>

						<th>Sous total</th>
					</tr>
					<tr class="table__header">
						<th>m²</th>
						<th>€ / m²</th>

						<th>€</th>
					</tr>
				</thead>
				<tbody>
					<tr class="table__row">
						<td><input type="number" class="input-tables" name="qty_2" required min="0" max="9999"  value='0' ></td>
						<td id="label_pu_2">0.65</td>
						<td id="total_detail_2">0.00</td>
					</tr>
				</tbody>
			</table>
		</div>
	</article>

	<!-- Tableaux des prix de la tonte -->
	<article class="detail-devis" id="card-3">
		<figure class="card-devis">
			<h2 class="titre-card">Tonte de gazon</h2>

			<input name="prix_3" id="prix_3" type="text" value="1" class="prix" hidden readonly>

			<table class="table table-resume">

				<thead>
					<tr class="table__header">
						<th>Superficie</th>
						<th>Prix</th>
						<th>Sous total</th>
					</tr>
					<tr class="table__header">
						<th>m²</th>
						<th>€ / m²</th>
						<th>€</th>
					</tr>
				</thead>
				<tbody>
					<tr class="table__row">
						<td>
							<input type="number" class="input-tables" name="qty_3" required min="0" max="9999"  value='0' >
						</td>
						<td id="label_pu_3">0.30</td>
						<td id="total_detail_3">0.00</td>

					</tr>
				</tbody>
			</table>
			</div>

	</article>

	<!-- Tableaux des prix de taille de haies -->
	<article class="detail-devis" id="card-4">
		<div class="card-devis">
			<h2 class="titre-card">Taille de haie</h2>

			<input name="prix_4" id="prix_4" type="text" value="5" class="prix" hidden readonly>

			<table class="table table-resume">

				<thead>
					<tr class="table__header">
						<th>Superficie</th>
						<th>Prix</th>
						<th>Sous total</th>
					</tr>
					<tr class="table__header">
						<th>m²</th>
						<th>€ / m²</th>
						<th>€</th>
					</tr>
				</thead>
				<tbody>
					<tr class="table__row">
						<td><input type="number" class="input-tables" name="qty_4" required min="0" max="9999" value='0' ></td>
						<td id="label_pu_4">4.20</td>
						<td id="total_detail_4">0.00</td>
					</tr>
				</tbody>
			</table>
		</div>
	</article>

	<!-- Tableaux des prix de l'élagage -->
	<article class="detail-devis" id="card-5">
		<div class="card-devis">
			<h2 class="titre-card">Elagage</h2>

			<input name="prix_5" id="prix_5" type="text" value="2" class="prix" hidden readonly>
			<div class="contenu-table-elagage">

				<p style="text-align:center;">Le prix de l'élagage sera estimé lors la visite des lieux</p>
			</div>
			<table class="table table-resume-elagage">


				<thead style="text-align:center">
					<tr class="table__header">
						<th>Prix</th>
					</tr>
					<tr class="table__header">
						<th>45€ / Heure</th>
					</tr>
				</thead>
				<tbody class="hidden">
					<tr class="table__row">
						<td class="hidden">
							<input type="number" class="input-tables" name="qty_5" required min="0" max="9999"  value='0' >
						</td>
						<td class="hidden" id="label_pu_5">2</td>

						<td class="hidden" id="total_detail_5">0.00</td>
					</tr>
				</tbody>

			</table>
		</div>
	</article>

	<!-- Tableaux des prix du tronçonnage-->
	<article class="detail-devis" id="card-6">
		<div class="card-devis">

			<h2 class="titre-card">Tronçonnage</h2>
			<p style="text-align:center;">Le prix du tronçonnage sera estimé lors de la visite des lieux</p>
			<input name="prix_6" id="prix_6" type="text" value="5" class="prix" hidden readonly>

			<table class="table table-resume">

				<thead style="text-align:center">
					<tr class="table__header">
						<th>Prix</th>
					</tr>
					<tr class="table__header">
						<th>45€ / Heure</th>
					</tr>
				</thead>
				<tbody class="hidden">
					<tr class="table__row">
						<td><input type="number" class="input-tables" name="qty_6" required min="0" max="9999" value='0'></td>
						<td id="label_pu_6">2</td>
						<td id="total_detail_6">0.00</td>
					</tr>
				</tbody>

			</table>
		</div>
	</article>

	<!-- Tableaux des prix pour l'évacuation des déchets -->
	<article class="detail-devis" id="card-7">
		<div class="card-devis">
			<h2 class="titre-card">Evacuation des déchets</h2>

			<input name="prix_7" id="prix_7" type="text" value="15" class="prix" hidden readonly>

			<table class="table table-resume">

				<thead>
					<tr class="table__header">
						<th>Volume</th>
						<th>Prix</th>

						<th>Sous total</th>
					</tr>
					<tr class="table__header">
						<th>m³</th>
						<th>€ / m³</th>

						<th>€</th>
					</tr>
				</thead>
				<tbody>
					<tr class="table__row">
						<td>
							<input type="number" class="input-tables" name="qty_7" required min="0" max="9999"  value='0' >
						</td>
						<td id="label_pu_7">15</td>

						<td id="total_detail_7">0.00</td>
					</tr>
				</tbody>
			</table>
		</div>
	</article>

	<!-- Tableaux des prix du nettoyage de terrasse -->
	<article class="detail-devis" id="card-8">

		<div class="card-devis">
			<h2 class="titre-card">Nettoyage terrasses</h2>

			<input name="prix_8" id="prix_8" type="text" value="2" class="prix" hidden readonly>

			<table class="table table-resume">

				<thead>
					<tr class="table__header">
						<th>Superficie</th>
						<th>Prix</th>

						<th>Sous total</th>
					</tr>
					<tr class="table__header">
						<th>m²</th>
						<th>€ / m²</th>

						<th>€</th>
					</tr>
				</thead>
				<tbody>
					<tr class="table__row">
						<td>
							<input type="number" class="input-tables" name="qty_8" required min="0" max="9999"  value='0' >
						</td>
						<td id="label_pu_8">2.5</td>

						<td id="total_detail_8">0.00</td>
					</tr>
				</tbody>
			</table>
		</div>
	</article>

	<!-- Tableaux des prix Robot tondeuse + kit -->
	<article class="detail-devis" id="card-9">
		<div class="card-devis">

			<h2 class="titre-card">Robot tondeuse + kit</h2>
			<div class=".contenu-table-robot">
				<p style="text-align:center;">Nous travaillons avec des robots de la marque Husqvarna et Stihl qui ont un très bon rapport qualité/prix. Selon les modèles que vous désirez les prix peuvent varier. Cependant vous pouvez avoir un aperçu du prix de la pose du kit en indiquant la superficie de votre terrain. A cela vous devrez ajouter le prix de votre robot tondeuse.</p>
			</div>
			<input name="prix_9" id="prix_9" type="text" value="2" class="prix" hidden readonly>

			<table class="table table-resume">

				<thead>
					<tr class="table__header">
						<th>Superficie</th>
						<th>Prix</th>

						<th>Sous total</th>
					</tr>
					<tr class="table__header">
						<th>m²</th>
						<th>m²</th>
						<th>€</th>

					</tr>
				</thead>

				<tr class="table__row">
					<td>
						<input type="number" class="input-tables" name="qty_9" required min="0" max="9999"  value='0' >
					</td>
					<td id="label_pu_9">0.50</td>

					<td id="total_detail_9">00.00</td>
				</tr>
				</tbody>
			</table>
		</div>
	</article>

	<br><br>
</main>

<script src="<?php echo ASSETS; ?>javascript/devis.js"></script>

<!-------------- FIN DU CONTENU DE LA PAGE "DEVIS.PHP" ------------------>