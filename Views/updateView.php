<?php

$title = 'Modification';
//Affiche le formulaire de modification
ob_start();
echo '<div class="container mt-3">';
echo '<h1>Modification : </h1>';
echo '<a class="btn btn-success" href="?page=planet">retour</a>';
echo '<a class="btn btn-success ms-2" href="index.php">accueil</a>';
echo '</div>';
$form->start('POST');
$form->input('nom', 'text', $elementRecup->getNom());
$form->input('type', 'text', $elementRecup->getType());
$form->input('diametre', 'number', $elementRecup->getDiametre());
$form->input('gravite', 'number', $elementRecup->getGravite());
$form->input('lien_nasa', 'text', $elementRecup->getLienNasa());
$form->end();

$content = ob_get_clean();

require_once 'Views/template.php';