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
<main id="contenu-inscription" role="main" style="background-color: rgb(138, 220, 113);" role="main">

    <!-- Formulaire d'inscription -->
    <form class="col-10 col-sm-6 col-md-4 col-xxl-3 m-auto pt-5 pb-5" action="inscription.ctrl" method="post" id="inscriptionForm">
        <h2 class="mb-3 fw-normal text-black text-center">Inscrivez-vous !</h2>

        <div class="form-floating mb-3">
            
            <input type="text" name="nom" class="form-control text-black bg-white" id="inputNom" placeholder="Nom" value="<?php echo $nom; ?>">
            <label for="inputNom">Votre nom</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" name="prenom" class="form-control text-black bg-white" id="inputPrenom" placeholder="Prenom" value="<?php echo $prenom; ?>">
            <label for="inputPrenom">Votre prénom</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" name="login" class="form-control text-black bg-white" id="inputLogin" placeholder="Pseudo" value="<?php echo $login; ?>">

            <label for="inputLogin">Votre pseudo</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" name="mail" class="form-control text-black bg-white" id="inputMail" placeholder="Email" value="<?php echo $mail; ?>">

            <label for="inputMail">Votre email</label>
        </div>
        <div class="form-floating mb-3">
            <input type="password" name="mdp" class="form-control text-black bg-white" id="inputPassword" placeholder="Mot de passe">

            <label for="inputPassword">Votre mot de passe</label>
        </div>
        <div class="form-floating">
            <input type="password" name="mdpbis" class="form-control text-black bg-white" id="inputMdpBis" placeholder="Confirmation de votre mot de passe">
            <label for="inputMdpBis">Confirmation de votre mot de passe</label>
        </div>
        <div class="form-check mb-3 d-flex justify-content-center">
            <label class="form-check-label mt-3" for="conditions">
                <input class="form-check-input checkbox-lg" type="checkbox" name="conditions" id="conditions">
                J'ai lu et j'accepte <a href="#" data-bs-toggle="modal" data-bs-target="#conditionsModal">les conditions d'utilisation</a>
            </label>
        </div>

        <p id="password-match"></p>
        <button  class="mt-3 form-floating submit-btn" type="submit">S'inscrire</button>

    </form>
</main>
<!-------------- FIN DU CONTENU DE LA PAGE "INSCRIPTION.PHP" ------------------>