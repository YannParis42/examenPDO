<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<?php
require 'Models/planetManager.php';

if (isset($_GET['page']) && !empty($_GET['page'])) {
    if ($_GET['page'] == 'planet') {
        require_once 'Controllers/planetController.php';
    }else {
        require_once 'Views/errorView.php';
    }
} elseif(isset($_GET['nom']) && !empty($_GET['nom'])){ //barre de recherche
    if($planet = PlanetManager::getOneByName()){
        include('Views/planetView.php');
    }else{
        include('Views/errorView.php'); 
    }

} else {
    require_once 'Views/homeView.php';
}