<?php

$niveau = 0;
$login = '';

if (isset($_SESSION['login'])) {
  $login = $_SESSION['login'];
  $niveau = $_SESSION['niveau'];
}
?>


<!-------------- CONTENU DE LA "NAVBAR.PHP" ------------------>

<nav class="nav-logo-boutons" role="navigation">
  <ul>
    <li>
      <a href="accueil">
        <img class="logo-nav-header" src="<?php echo ASSETS; ?>images/logos/gvw-logo-nb.png">
      </a>
    </li>

    <li class="les-deux-boutons">
      <?php if ($niveau == 0) : ?>

        <!-- Lien page connexion -->
        <a class="btn  btn-outline-success" href="connexion">Connexion</a>

        <!-- Lien page inscription -->
        <a class="btn  btn-outline-success" href="inscription">Inscription</a>
      <?php else : ?>
        <!-- Liste déroulante "nom utilisateur" déconnexion et désinscription-->
        <div class="icon-logout">
          <div class="login-nom">
            <?php echo $login; ?>
          </div>
          <i class="fa-solid fa-regular fa-arrow-right-to-bracket" style="color: #3e8e41; font-size:1.5em;"></i>

          <a href="deconnexion">
            <p class="hidden text center">Se déconnecter</p>
          </a>
          <a href="delete.account" onclick="return confirm('Voulez-vous vraiment supprimer ?');">
            <p class="hidden text center">Supprimer votre compte</p>
          </a>
        </div>

        <!-- Modale -->
        <!-- <div id="modale">
          <div id="modale-contenu">            
            <button onclick="deconnecter()">Se déconnecter</button>
            <button onclick="supprimerCompte()">Supprimer votre compte</button>
          </div>
        </div> -->
      <?php endif; ?>
    </li>

  </ul>
</nav> 
<nav class="nav-liste-pages" role="navigation">
  <ul class="nav-liste">
  <?php if ($niveau == 1) : ?>
    <li><a class="<?php echo $title == 'Admin' ?  'active' : '' ?>" href="admin">Admin</a></li>
  <?php endif; ?>
    <li><a class="<?php echo $title == 'Accueil' ?  'active' : '' ?>" href="accueil">Accueil</a></li>
    <li><a class="<?php echo $title == 'Services' ?  'active' : '' ?>" href="services">Services</a></li>

    <li><a class="<?php echo $title == 'Devis' ?  'active' : '' ?>" href="devis">Devis</a></li>

    <li><a class="<?php echo $title == 'Actualités' ?  'active' : '' ?>" href="actualites">Actualités</a></li>
    <li><a class="<?php echo $title == 'Contact' ?  'active' : '' ?>" href="contact">Contact</a></li>
  </ul>

  <!-- Icônes du menu hamburger "ouvrir / fermer " -->
  <i class="fa-bars menu-hamburger hidden" style="color: green;"></i>
  <i class="fa-xmark menu-hamburger-croix hidden" style="color: green;"></i>

  <!-- Cette div inclue en Javascript la nav-liste version mobile -->
  <div class="nav-mobile"></div>

</nav>
<!-------------- FIN DU CONTENU DE LA "NAVBAR.PHP" ------------------>