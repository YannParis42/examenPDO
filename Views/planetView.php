<?php

$title = $planet->getNom();
//Affiche une card planet
$content = '
<div class="card m-2 border border-2 border-success" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Nom : '. $planet->getNom().'</h5>
    <p class="card-text">Type : '. $planet->getType().'</p>
    <p class="card-text">Diamètre : ' . $planet->getDiametre() . '</p>
    <p class="card-text">Gravité : ' . $planet->getGravite() . '</p>
    <div class="row">
      <a href="' . $planet->getLienNasa() . '" target="_blank" class="btn btn-primary col-8 mb-2 me-2 ">Lien NASA</a>
      <a href="?" class="btn btn-success col-4 ">Accueil</a>
      <a href="?page=planet" class="btn btn-success col-6 ms-4">Retour liste</a>
    </div>
  </div>
</div>
';



require_once 'Views/template.php';