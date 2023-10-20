<?php
if (isset($_SESSION['reload'])) {
    $detail = $_SESSION['reload'];
    $detail['contenu'] = str_replace("<br>", "\r\n", $detail['contenu']);
}
?>
<!-- CONTENU DE LA PAGE "updateactualites.php" -->

<main id="contenu-updateactualites" style="background-color: rgb(138, 220, 113);" role="main">

    <!-- Formulaire de modification d'actualité -->
    <form class="form-detail" enctype="multipart/form-data" action="actu-save" method="post">
        <h2><?php echo isset($_SESSION['reload']) ? 'Modification' : 'Nouvelle actualité'; ?></h2>
        <input type="hidden" value="<?php echo isset($detail['id']) ? $detail['id'] : ''; ?>" name="id">
        <div>
            <label>Titre</label>
            <input type="text" value="<?php echo isset($detail['titre']) ? $detail['titre'] : ''; ?>" name="titre">
        </div>
        <div>
            <label>contenu</label>
            <textarea onkeydown="insertLineBreak(event)" id="editor" name="contenu" cols="50" rows="10"><?php echo isset($detail['contenu']) ? $detail['contenu'] : ''; ?></textarea>
        </div>
        <div>
            <input type="file" name="medias" multiple accept="video/,image/">
        </div>
        <p> <strong>Images acceptées:" jpg, jpeg, png, gif "</strong></p>
        <p> <strong>Vidéos acceptées:" mp4, avi, mov "</strong></p>
        <div>
            <label>En ligne</label>
            <input type="checkbox" name="enligne" value="1" <?php if (isset($detail['enligne']) && $detail['enligne'] == 1) {
                                                                echo "checked";
                                                            } ?>>
        </div>
        <div>
            <button type="submit">Valider</button>
        </div>
        <br>
    </form>

    <script>
        function insertLineBreak(event) {
            if (event.keyCode === 13) {
                event.preventDefault();
                var textarea = document.getElementById('editor');
                var startPos = textarea.selectionStart;
                var endPos = textarea.selectionEnd;
                textarea.value = textarea.value.substring(0, startPos) + '\r\n' + textarea.value.substring(endPos);
                textarea.setSelectionRange(startPos + 1, startPos + 1);
            }
        }
    </script>

</main>


<!--FIN DU CONTENU DE LA PAGE "updateactualites.php" -->