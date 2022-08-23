<?php
    //import
    include './utils/connectBdd.php';
    include './model/modelEvent.php';
    include './manager/managerEvent.php';
    include './vue/view_createEvent.php';
    //message 
    $message = "";    
    //test si le bouton submit est cliqué
    if(isset($_POST['create'])){
        //test si les champs sont remplis
        if($_POST['nom_event'] !="" AND $_POST['desc_event'] !="" AND $_POST['date_event'] !="" AND $_POST['nom_type'] !=""){
            //sécurisation des variables POST
            $nom = cleanInput($_POST['nom_event']);
            $desc = cleanInput($_POST['desc_event']);
            $date = cleanInput($_POST['date_event']);
            $type = cleanInput($_POST['nom_type']);
            echo $prix;
            //instancier l'objet
            $event = new ManagerEvent($nom, $desc, $date, $nom_type);
            var_dump($event);
            $event->createEvent($bdd);
            $message = mb_strtoupper($event->getNomEvent())." a été ajouté en BDD";
        }
        //test sinon les champs sont vides
        else{
            $message = 'Les champs sont vides';
        }
    }
    //test sinon le bouton n'est pas cliqué
    else{
        $message = 'Pour ajouter un article cliquez sur ajouter';
    }
    //affichage du message d'erreur
    echo $message;

?>