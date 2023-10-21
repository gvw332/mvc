<?php

$niveau = 0;
$login = '';

if (isset($_SESSION['login'])) {
  $login = $_SESSION['login'];
  $niveau = $_SESSION['niveau'];
}
?>


<!-------------- CONTENU DE LA "NAVBAR.PHP" ------------------>

<nav class="nav-non-co" role="navigation">

      <?php if ($niveau == 0) : ?>
        <!-- Lien page connexion -->
        <a href="connexion">Connexion</a>
        <!-- Lien page inscription -->
        <a href="inscription">Inscription</a>
      <?php else : ?>
        <!-- Liste déroulante "nom utilisateur" déconnexion et désinscription-->
        <div class="icon-logout">
          <div class="login-nom">
            <?php echo $login; ?>
          </div>
          <a href="deconnexion">
            <p class="hidden text center">Se déconnecter</p>
          </a>
          <a href="delete.account" onclick="return confirm('Voulez-vous vraiment supprimer ?');">
            <p class="hidden text center">Supprimer votre compte</p>
          </a>
        </div>
      <?php endif; ?>

</nav>

<nav class="nav-liste-pages" role="navigation">

  <ul class="nav-liste">
    <?php if ($niveau == 1) : ?>
      <li>
        <a class="<?php echo $title == 'Admin' ?  'active' : '' ?>" href="admin">Admin</a>
      </li>
    <?php endif; ?>
      <li>
        <a class="<?php echo $title == 'Accueil' ?  'active' : '' ?>" href="accueil">Accueil</a>
      </li>
  </ul>

</nav>
<!-------------- FIN DU CONTENU DE LA "NAVBAR.PHP" ------------------>