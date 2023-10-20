<?php

$session = new Session();

$niveau = 0;
$login = '';


if (isset($_SESSION['login'])) {
    $login = $_SESSION['login'];
    $niveau = $_SESSION['niveau'];
}
if ($niveau != 1) {
    $session->setFlash("Vous n'êtes pas habilité.");
    $session->render("accueil");
}

?>
<!---------- CONTENU DE LA PAGE "admin.php" ------------>
<main id="contenu-admin" role="main">

    <!-- contenu de la table admin-->
    <div class="table-responsive">
        <table class="table table-striped overflow-scroll">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Email</th>
                    <th>Niveau</th>
                    <th>Login</th>
                    <th>Delete</th>
                    <th>Update</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($params as $infos) { ?>
                    <tr>
                        <?php foreach ($infos as $key => $info) : ?>
                            <?php if ($key !== 'mdp') : ?>
                                <td><?= $info; ?></td>
                            <?php endif; ?>
                        <?php endforeach ?>
                        
                        <td>
                            <form action="admin.delete" method="post">
                                <input type="hidden" value=<?= $infos->id; ?> name="id">
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Voulez-vous vraiment supprimer ?');">Suppr.</button>
                            </form>
                        </td>
                        <td>
                            <form action="admin.update" method="post">
                                <input type="hidden" value=<?= $infos->id; ?> name="id">
                                <button type="submit" class="btn btn-primary btn-sm">Modif.</button>
                            </form>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

</main>
<!---------- FIN DU CONTENU DE LA PAGE "admin.php" ------------>
