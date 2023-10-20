<?php
// On charge la classe Session'

$token = '';
$mdp = '';
$mdpbis = '';

if (isset($_SESSION['reload'])) {
	$token = $_SESSION['reload']['token'];
	$mdp = $_SESSION['reload']['mdp'];
	$mdpbis = $_SESSION['reload']['mdpbis'];
	$email = $_SESSION['reload']['email'];
	unset($_SESSION['reload']);
}
if (isset($_GET['token'])) {
	$token = htmlspecialchars($_GET['token']);
	unset($_GET['token']);
}
if (isset($_GET['u'])) {
	$email = htmlspecialchars($_GET['u']);
	unset($_GET['u']);
}
?>
<!-------------- CONTENU DE LA PAGE "CHANGER-MDP.PHP" ------------------>
<main id="contenu-changer-mdp" style="background-color: rgb(138, 220, 113);" role="main">

	<h1 class="text-center">Choix d'un nouveau mot de passe</h1>
	<!-- Formulaire de changement de mdp-->
	<form class="w-50 m-auto pt-5 pb-5 text-center" action="nouveau-mdp.ctrl" method="post">

		<div class="m-2">
			<input type="hidden" name="token" value="<?= $token ?>" class="form-control">
			<input type="hidden" name="email" value="<?= $email ?>" class="form-control">
			<label for="mdp" class="form-label">Mot de passe<span class="text-danger">*</span></label>
			<input type="password" name="mdp" class="form-control" id="mdp">
		</div>
		<div class="m-2">
			<label for="mdpbis" class="form-label">Confirmer mot de passe<span class="text-danger">*</span></label>
			<input type="password" name="mdpbis" class="form-control" id="mdpbis">
		</div>


		<div class="m-4">
			<button class="btn btn-primary" type="submit">Enregistrer</button>
		</div>

	</form>

</main>
<!-------------- FIN DE CONTENU DE LA PAGE "CHANGER-MDP.PHP" ------------------>