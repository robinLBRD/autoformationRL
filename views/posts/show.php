<?php
/*
  Auteur : Robin Laborde
  Nom du projet : SiteDB-MVC
  Description : site web tout simple qui utilise une base de donnée et qui à une structure M.V.C.
  Version : 01
  Classe : I.FDA.P3C
 */
?>
<!-- affichage des informations du post sélectionné -->
<div class="jumbotron">
  <div class="container mt-4">
    <h2>Voici les détails du post :</h2>
    <div class="ml-3">
      <h4>Auteur :</h4>
      <p><?php echo $post->author; ?></p>
      <h4>Objet :</h4>
      <p><?php echo $post->content; ?></p>
      <p><a class="btn btn-primary" href="?controller=posts&action=index" role="button">Retourner à la liste des post</a></p>
    </div>
  </div>
</div>