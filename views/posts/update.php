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
<div class="jumbotron">
  <div class="contrainer mt-4">
    <h2>Mettre à jour le post !</h2>
    <div class="ml-3">
      <!-- une fois que le bouton submit est appuyé alors j'appel la fonction de mise à jour de post -->
      <form method="POST" action="?controller=posts&action=update&id=<?php echo $post->id; ?>">
        <div class="form-group">
          <label for="auteur">Auteur :</label>
          <input type="text" id="auteur" name="auteur" class="form-control" readonly value="<?php echo $post->author; ?>">
        </div>
        <div class="form-group">
          <label for="objet">Objet :</label>
          <input type="text" id="objet" name="objet" class="form-control" value="<?php echo $post->content; ?>">
        </div>
        <input type="submit" name="valider" class="btn btn-success" value="Mettre à jour">
      </form>
    </div>
  </div>
</div>