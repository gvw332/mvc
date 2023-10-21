<?php
$nom    = '';
$prenom = '';
$login  = '';
$mail   = '';

if (isset($_SESSION['reload'])) {
    $data       = $_SESSION['reload'];

    $nom    = $data['nom'];
    $prenom = $data['prenom'];
    $login  = $data['login'];
    $mail   = $data['mail'];

    unset($_SESSION['reload']);
}
?>

<!-------------- CONTENU DE LA PAGE "INSCRIPTION.PHP" ------------------>
<main id="contenu-inscription" role="main">
    <form id="inscriptionForm" action="inscription.ctrl" method="post">
        <h2>Inscrivez-vous !</h2>
        <div>
            <label for="inputNom">Votre nom</label>
            <input type="text" name="nom" id="inputNom" placeholder="Nom" value="<?php echo $nom; ?>">
        </div>
        <div>
            <label for="inputPrenom">Votre prénom</label>
            <input type="text" name "prenom" id="inputPrenom" placeholder="Prenom" value="<?php echo $prenom; ?>">
        </div>
        <div>
            <label for="inputLogin">Votre pseudo</label>
            <input type="text" name="login" id="inputLogin" placeholder="Pseudo" value="<?php echo $login; ?>">
        </div>
        <div>
            <label for="inputMail">Votre email</label>
            <input type="text" name="mail" id="inputMail" placeholder="Email" value="<?php echo $mail; ?>">
        </div>
        <div>
            <label for="inputPassword">Votre mot de passe</label>
            <input type="password" name="mdp" id="inputPassword" placeholder="Mot de passe">
        </div>
        <div>
            <label for="inputMdpBis">Confirmation de votre mot de passe</label>
            <input type="password" name="mdpbis" id="inputMdpBis" placeholder="Confirmation de votre mot de passe">
        </div>
        <div>
            <label for="conditions">
                <input class="form-check-input checkbox-lg" type="checkbox" name="conditions" id="conditions">
                J'ai lu et j'accepte <a href="#" data-bs-toggle="modal" data-bs-target="#conditionsModal">les conditions d'utilisation</a>
            </label>
        </div>
        <!-- Bouton d'inscription -->
        <button type="submit">S'inscrire</button>
    </form>
</main>
<!-------------- FIN DU CONTENU DE LA PAGE "INSCRIPTION.PHP" ------------------>