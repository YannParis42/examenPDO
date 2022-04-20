<?php

require_once 'Models/planetManager.php';
//Si le $_GET est présent et qu'il a la valeur planet
if ( isset($_GET['page']) && $_GET['page'] === 'planet') {
    //Vérification de l'action
    if (isset($_GET['action'])) {
        require_once 'Assets/formConstructor.php';
        $form = new Form();
        //insert
        if ($_GET['action'] == 'insert') {
            
            if (!empty($_POST)) {
                try {
                    //Creation d'un objet pour l'envoyer dans la BDD
                    $elementInsert = new Planet;
                    $elementInsert->hydrate();
                    //Insertion dans la BDD
                    $eltInsert = PlanetManager::insert($elementInsert);
                    require_once 'Views/successInsertionView.php';
                } catch(Exception $e) {
                    echo $e->getMessage();
                    require_once 'Views/formView.php';
                }
            } else {
                require_once 'Views/formView.php';
            }
        } 
        //update
        elseif($_GET['action'] == 'update'){
            if($elementRecup = PlanetManager::getOneById()){
                if (!empty($_POST)) {
                    try {
                        //Creation d'un objet pour l'envoyer dans la BDD
                        $elementInsert = new Planet;
                        $elementInsert->hydrate();
                        //Modif BDD
                        $eltInsert = PlanetManager::update($elementInsert);
                        require_once 'Views/successModification.php';
                    } catch(Exception $e) {
                        echo $e->getMessage();
                        require_once 'Views/updateView.php';
                    }
                }else{
                    require_once 'Views/updateView.php';
                }
            } else {
                require_once 'Views/updateView.php';
            }

        }
        //delete
        elseif($_GET['action'] == 'delete'){
            if($elementRecup = PlanetManager::getOneById()){
                if (!empty($_POST['validate']) && $_POST['validate']==TRUE) {
                    try {
                        //Modif BDD
                        $deleteElement = PlanetManager::delete();

                        require_once 'Views/successDelete.php';
                    }catch(Exception $e){
                        echo $e->getMessage();
                        require_once 'Views/deleteView.php';
                    }
                }else{
                    require_once 'Views/deleteView.php';
                }
            }else{
                require_once 'Views/deleteView.php';
            }
        }else{
            require_once 'Views/errorView.php';
        }
    }
    //si le $_GET contient un id renvoi la vue de la card
    elseif (isset($_GET['id'])) {
        
        if ($planet = PlanetManager::getOneById()) {
            require_once 'Views/planetView.php';
        } else {
            require_once 'Views/errorView.php';
        }
    //si le $_GET contient un name renvoi la vue de la card  
    } elseif (isset($_GET['nom'])) {     
        if ($planet = PlanetManager::getOneByName()) {
            require_once 'Views/planetView.php';
        } else {
            require_once 'Views/errorView.php';
        }
    
    }//Si le $_GET  a la valeur tellurique
    elseif (isset($_GET['tellurique'])){     
            
        if ($planet = PlanetManager::getAllTellurique()) {
            require_once 'Views/planetsView.php';
        } else {
            require_once 'Views/errorView.php';
        }
    ///Si le $_GET  a la valeur gazeuse
    }elseif (isset($_GET['gazeuse']) ) {     
        
        if ($planet = PlanetManager::getAllGazeuse()) {
            require_once 'Views/planetsView.php';
        } else {
            require_once 'Views/errorView.php';
        }
    //Si le $_GET est vide renvoi la vue de la liste    
    }else {
        $planetList = PlanetManager::getAll();
        require_once 'Views/planetsView.php';
    }
}
  else {
    require_once 'Views/errorView.php';
}