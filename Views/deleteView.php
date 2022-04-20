<?php

$title = 'Supression';
//Affiche le formulaire de suppression
ob_start();
echo '<div class="container mt-3">';
echo '<h1>Supression : </h1>';
echo '<a class="btn btn-success" href="?page=planet">retour</a>';
echo '<a class="btn btn-success ms-2" href="index.php">accueil</a>';
echo '</div>';
$form->start('POST');
echo '<h2>'.$elementRecup->getNom().'('.$elementRecup->getId().')</h2>';
$form->checkbox();
$form->end();

$content = ob_get_clean();

require_once 'Views/template.php';