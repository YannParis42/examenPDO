<?php


//Connexion à la BDD
try{
    $db = new PDO('mysql:host=localhost;charset=utf8;dbname=examen_pdo','root');
}catch(PDOException $e){
    die('Erreur: '.$e->getMessage());//die met fin à la page
}

// Creation Table---------------------------------------------------------------------------------------------------

$db->exec('CREATE TABLE planet 
(
    id INT(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nom VARCHAR(7),
    type VARCHAR(10),
    diametre INT(9),
    gravite FLOAT,
    lien_nasa VARCHAR(180)
)');

// Données des planètes
// $db->exec("INSERT INTO planet(nom, type, diametre, gravite, lien_nasa) VALUES 
// ('Mercure', 'Tellurique', 4879, 3.7, 'https://solarsystem.nasa.gov/planets/mercury'),
// ('Venus', 'Tellurique', 12104, 8888, 'https://solarsystem.nasa.gov/planets/venus'),
// ('Terre', 'Tellurique', 12576, 9.79, 'https://solarsystem.nasa.gov/planets/earth'),
// ('Mars', 'Tellurique', 6792, 3.71, 'https://solarsystem.nasa.gov/planets/mars'),
// ('Jupiter', 'Gazeuse', 142984, 24.79, 'https://solarsystem.nasa.gov/planets/jupiter'),
// ('Saturne', 'Gazeuse', 120536, 10.44, 'https://solarsystem.nasa.gov/planets/saturn'),
// ('Uranus', 'Gazeuse', 51118, 8.87, 'https://solarsystem.nasa.gov/planets/uranus'),
// ('Neptune', 'Gazeuse', 49528, 11.15, 'https://solarsystem.nasa.gov/planets/neptune')
// "); 