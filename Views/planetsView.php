<?php

$title = 'Liste des planètes';
//Affiche le tableau des elements chimiques
ob_start(); ?>

<div class="container mt-3">
    <h1>Liste des planètes : </h1>
    <a class="btn btn-success" href="?page=planet&action=insert">Ajouter</a>
    <a class="btn btn-success ms-2" href="?">accueil</a>
</div>

<div class="container">
        <table class="table table-striped table-hover mt-5 border border-3 border-success">
            <thead>
                <tr>
                    <th>Nom (id)</th>
                    <th>Type</th>
                    <th>Diametre</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach($planetList as $planet) {
                        echo '<tr>';
                            echo '<td><a href="?page=planet&id='.$planet->getId().'">';
                            echo $planet->getNom()?: 'N/A';
                            echo ' ('.$planet->getId()?: 'N/A';
                            echo ')';
                            echo '</a></td>';
                            echo '<td>';
                            echo $planet->getType()?: 'N/A';
                            echo '</td>';
                            echo '<td>';
                            echo $planet->getDiametre()?: 'N/A';
                            echo '</td>';
                            echo '<td>';
                            echo '<a class="btn btn-success ms-2" href="?page=planet&id='.$planet->getId().'&action=update">modifer</a>';
                            echo '</td>';
                            echo '<td>';
                            echo '<a class="btn btn-danger ms-2" href="?page=planet&id='.$planet->getId().'&action=delete">supprimer</a>';
                            echo '</td>';
                        echo '</tr>';
                    }
                ?>
            </tbody>
        </table>
    </div>
<?php
$content = ob_get_clean();

require_once 'Views/template.php';