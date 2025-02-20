<?php
    // Chemins du projet
    define('BASE_PATH', str_replace("\Config","",__DIR__) . '/');
    // à optimiser si besoin pour être indépendant du dossier de config
    
    define('MODEL_PATH', BASE_PATH . 'Model/');
    define('VIEW_PATH', BASE_PATH . 'View/');
    define('CONTROLLER_PATH', BASE_PATH . 'Controller/');

    // Connexion à la bdd

?>
