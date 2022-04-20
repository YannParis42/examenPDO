<?php

$title = $planet->getNom();
//Affiche une card planet
$content = '
<div class="card m-2 border border-2 border-success" style="width: 23rem;">
  <div class="card-body">
    <h5 class="card-title">Nom : '. $planet->getNom().'</h5>
    <p class="card-text">Type : '. $planet->getType().'</p>
    <p class="card-text">Diametre : ' . $planet->getDiametre() . '</p>
    <p class="card-text">Gravite : ' . $planet->getGravite() . '</p>
    <p class="card-text">Lien NASA : ' . $planet->getLienNasa() . '</p>
    <div class="row">
      <a href="?" class="btn btn-success col-4">Accueil</a>
      <a href="?page=planet" class="btn btn-success col-6 ms-4">Retour liste</a>
    </div>
  </div>
</div>
';



require_once 'Views/template.php';