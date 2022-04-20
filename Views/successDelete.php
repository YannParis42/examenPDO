<?php

$title = 'Réussite de la suppression';

if($deleteElement->rowcount()==1){ //Si il y a eu une insertion
    $content = '
    <div class="m-2">
        <a class="btn btn-success" href="?page=planet">Retour liste</a>
        <p>Suppression réussie.</p>
    </m-2>
    ';
    require_once 'views/template.php';
}else{   //Si les données n'ont pas été modifié
    $content = '
    <div class="m-2">
        <a class="btn btn-success" href="?page=planet">Retour liste</a>
        <p>Pas de ligne modifiée.</p>
    </m-2>
    ';
    require_once 'views/template.php';
}