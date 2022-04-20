<?php

$title = 'Insertion';
//Affiche le formulaire d'insertion
ob_start();
echo '<div class="container mt-3 ">';
echo '<h1>Insertion : </h1>';
echo '<a class="btn btn-success" href="?page=planet">retour</a>';
echo '<a class="btn btn-success ms-2" href="index.php">accueil</a>';
echo '</div>';
$form->start('POST');
$form->input('nom', 'text');
$form->input('type', 'text');
$form->input('diametre', 'number');
$form->input('gravite', 'number');
$form->input('lien_nasa', 'text');
$form->end();

$content = ob_get_clean();

require_once 'Views/template.php';