<?php
/*
  Auteur : Robin Laborde
  Nom du projet : SiteDB-MVC
  Description : site web tout simple qui utilise une base de donnée et qui à une structure M.V.C.
  Version : 01
  Classe : I.FDA.P3C
 */
?>
<!-- formulaire de mise à jour d'un post -->
<p>Update un post !</p>
<form method="POST">
  <div class="form-group">
    <label for="auteur">Auteur :</label>
    <input type="text" id="auteur" name="auteur" value="<?php echo $post->author; ?>">
  </div>
  <div class="form-group">
    <label for="objet">Objet :</label>
    <input type="text" id="objet" name="objet" value="<?php echo $post->content; ?>">
  </div>
  <input type="submit" name="valider" value="Valider">
</form>