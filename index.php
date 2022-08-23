<?php
    include './utils/function.php';
    //Analyse de l'URL avec parse_url() et retourne ses composants
    $url = parse_url($_SERVER['REQUEST_URI']);
    //test soit l'url a une route sinon on renvoi à la racine
    $path = isset($url['path']) ? $url['path'] : '/';

    switch($path){
        case '/tpSecu/createEvent':
            include './controller/controllerCreateEvent.php';
            break;
        case '/tpSecu/createUser':
            include './controller/controllerCreateUser.php';
            break;
        case '/tpSecu/allEvent':
            include './controller/controllerListEvent.php';
            break;
        case '/tpSecu/activate':
            include './controller/controllerActivation.php.php';
            break;
        case '/tpSecu/sendMail':
            include './controller/controllerEnvoiMail.php';
            break;
        case '/tpSecu/testMail':
            include './controller/controllerTestMail.php';
            break;
        default :
            include './controller/controllerAccueil.php';
            break;
    }
?>