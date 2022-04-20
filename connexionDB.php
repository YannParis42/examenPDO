<?php


//Connexion à la BDD
try{
    $db = new PDO('mysql:host=localhost;charset=utf8;dbname=examen_pdo','root');
}catch(PDOException $e){
    die('Erreur: '.$e->getMessage());//die met fin à la page
}

// Creation Table---------------------------------------------------------------------------------------------------

$db->exec('CREATE TABLE chemical 
(
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    name VARCHAR(255),
    symbol VARCHAR(255),
    atomic_number INT,
    ordinary_state VARCHAR(255),
    fusion_point FLOAT,
    family VARCHAR(255),
    image_path VARCHAR(255)
)');

$db->exec("INSERT INTO chemical(name, symbol, atomic_number, ordinary_state, fusion_point, family, image_path) VALUES 
('Plomb', 'Pb', 82, 'solide', 327.46, 'Métal pauvre','Assets/Images/imagePlomb.jpg'),
('Etain', 'Sn', 50, 'solide', 231.928,'Métal pauvre','Assets/Images/imageEtain.jpg'),
('Or', 'Au', 79, 'solide', 1064.18, 'Métal de transition','Assets/Images/imageOr.jpg'),
('Fer', 'Fe', 26, 'solide ferromagnétique', 1538, 'Métal de transition','Assets/Images/imageFer.jpg')
"); 