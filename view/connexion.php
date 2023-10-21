<?php

$login    	= '';

if (isset($_SESSION['reload'])) {
	$data   	= $_SESSION['reload'];
	$login   	= $data['login'];
	unset($_SESSION['reload']);
}

?>

<!-------------- CONTENU DE LA PAGE "CONNEXION.PHP" ------------------>
<main id="contenu-connection" role="main">

    <form action="connexion.ctrl" method="post">
        <h2>Connectez-vous !</h2>
        
        <div>
            <label for="login">Votre pseudo ou email</label>
            <input type="text" name="login" id="login" placeholder="Pseudo ou email">
        </div>
        
        <div>
            <label for="mdp">Mot de passe</label>
            <input type="password" name="mdp" id="mdp" placeholder="Mot de passe">
        </div>
        
        <a href="mdp-demande">Mot de passe oublié ?</a>
        
        <button type="submit">Se connecter</button>
    </form>

</main>
<!-------------- FIN DU CONTENU DE LA PAGE "CONNEXION.PHP" ------------------>