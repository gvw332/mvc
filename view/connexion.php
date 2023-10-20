<?php

$login    	= '';

if (isset($_SESSION['reload'])) {
	$data   	= $_SESSION['reload'];
	$login   	= $data['login'];
	unset($_SESSION['reload']);
}

?>

<!-------------- CONTENU DE LA PAGE "CONNEXION.PHP" ------------------>
<main id="contenu-connection" role="main" style="background-color: rgb(138, 220, 113);" role="main">

	<form class="col-10 col-sm-6 col-md-4 col-xxl-3 m-auto pt-5 pb-5" action="connexion.ctrl" method="post">
		<h2 class="mb-3 fw-normal text-black text-center">Connectez-vous !</h2>

		<div class="form-floating mb-2">
			<input type="text" name="login" class="form-control text-black " id="floatingInput" placeholder="name@example.com">
			<label for="floatingInput">Votre pseudo ou email</label>
		</div>
		<div class="form-floating">
			<input type="password" name="mdp" class="form-control text-black" id="floatingPassword" placeholder="Password">
			<label for="floatingPassword">Mot de passe</label>
		</div>
		
		<a href="mdp-demande" class="">Mot de passe oublié ?</a>
		
		<button class="mt-3 form-floating submit-btn" type="submit">Se connecter</button>
		<br><br><br><br><br>
	</form>

</main>
<!-------------- FIN DU CONTENU DE LA PAGE "CONNEXION.PHP" ------------------>