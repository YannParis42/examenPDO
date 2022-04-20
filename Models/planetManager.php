<?php

require_once 'connexionDB.php';
require_once 'Models/planetModel.php';
//Toutes les requêtes SQL sont là
class PlanetManager {

//METHODS
    //Récupération par id
    public static function getOneById() {
        $planetPreparedQuery = $GLOBALS['db']->prepare("SELECT * FROM planet WHERE id = ?");
        $planetPreparedQuery->execute([$_GET['id']]);
        return $planetPreparedQuery->fetchObject('planet');
    }
    //Récupération par name
    public static function getOneByName() {
        $planetPreparedQuery = $GLOBALS['db']->prepare("SELECT * FROM planet WHERE nom = ?");
        $planetPreparedQuery->execute([$_GET['nom']]);
        return $planetPreparedQuery->fetchObject('planet');
    }
    //Récupération de toute les entrées
    public static function getAll(): Array {
        $planetQuery = $GLOBALS['db']->query("SELECT * FROM planet");
        return $planetQuery->fetchAll(PDO::FETCH_CLASS, 'planet');
    }
    //Récupération de toute les entrées telluriques
    public static function getAllTellurique(): Array {
        $planetQuery = $GLOBALS['db']->query("SELECT * FROM planet WHERE type = 'Tellurique'");
        return $planetQuery->fetchAll(PDO::FETCH_CLASS, 'planet');
    }
    //Récupération de toute les entrées gazeuses
    public static function getAllGazeuse(): Array {
        $planetQuery = $GLOBALS['db']->query("SELECT * FROM planet WHERE type = 'Gazeuse'");
        return $planetQuery->fetchAll(PDO::FETCH_CLASS, 'planet');
    }
    //Function insert 
    public static function insert($elementInsert) {
        $GLOBALS['db']->exec("ALTER TABLE planet AUTO_INCREMENT = 1");
        $insertQuery = $GLOBALS['db']->prepare("INSERT INTO planet(nom, type, diametre, gravite, lien_nasa) VALUES 
        (?, ?, ?, ?, ?)");
        $insertQuery->execute([$elementInsert->getNom(), $elementInsert->getType(), $elementInsert->getDiametre(), $elementInsert->getGravite(), $elementInsert->getLienNasa()]);
        return $insertQuery;
    }
    //Function update
    public static function update($elementInsert){
        $updateQuery = $GLOBALS['db']->prepare("UPDATE planet SET nom=?, 
                                                                  type=?, 
                                                                  diametre=?, 
                                                                  gravite=?, 
                                                                  lien_nasa=? 
                                                                WHERE id = ?");

        $updateQuery->execute([$elementInsert->getNom(), $elementInsert->getType(), $elementInsert->getDiametre(), $elementInsert->getGravite(), $elementInsert->getLienNasa(),$_GET['id']] );
        return $updateQuery;
    }
    
    //Function delete
    public static function delete(){
        $deleteQuery = $GLOBALS['db']->prepare("DELETE FROM planet WHERE id=?");
        $deleteQuery->execute([$_GET['id']]);
        return $deleteQuery;
    }
}