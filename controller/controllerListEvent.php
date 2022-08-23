<?php
    //import
    include './utils/connectBdd.php';
    include './model/modelArticle.php';
    include './manager/managerArticle.php';
    include './vue/viewEvent.php';
    //message 
    $message = ""; 
    //instance de l'objet ManagerArticle
    $art = new ManagerEvent(null, null, null,null,null);
    //stocker le résultat de la méthode showAllArticle
    $liste = $art->showAllEvent($bdd);
    //test si le tableau d'article est vide
    if(empty($liste)){
        $message = '<a href="/secu/createArticle">Veuillez ajouter un article</a>';
    }
    //test sinon (tableau est rempli)
    else{
        //parcourir le tableau (version tableau associatif)
        foreach($liste as $value){
            echo "<p>Num : ".$value[0]['id_article'].
            " Nom : ".$value[0]['nom_article'].
            " Prix : ".$value[0]['prix_article']." €</p>";
        }
    }
    echo $message;

    //exemple si on souhaite stocker le résultat d'un article dans un objet
    // $art->setIdArt($liste[0]['id_article']);
    // $art->setNomArt($liste[0]['nom_article']);
    // $art->setPrixArt($liste[0]['prix_article']);
    // var_dump($art);
?>