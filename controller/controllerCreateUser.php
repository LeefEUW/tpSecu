<?php
    //import
    include './utils/connectBdd.php';
    include './id_smtp.php';
    include './model/modelUtilisateur.php';
    include './manager/managerUtilisateur.php';
    include './vue/viewCreateUser.php';
    $message = "";
    //test si le bouton submit est cliqué
    if(isset($_POST['createUser'])){
        //test si tous les champs sont remplis
        if($_POST['nom_util'] !="" AND $_POST['prenom_util'] !="" AND 
        $_POST['mail_util'] !="" AND $_POST['mdp_util'] !="" AND
        $_POST['confirm_mdp'] !=""){
            //stocker et nettoyer les super globales $_POST (password)
            $pwd_util = cleanInput($_POST['mdp_util']);
            $confirm_pwd = cleanInput($_POST['confirm_mdp']);
            //test correspondance du mot de passe
            if($pwd_util == $confirm_pwd){
                //stocker et nettoyer les super globales $_POST
                $nom_util = cleanInput($_POST['nom_util']);
                $prenom_util = cleanInput($_POST['prenom_util']);
                $mail_util = cleanInput($_POST['mail_util']);
                //instance d'un objet ManagerUtil (role utilisateur)
                $util = new ManagerUtil($nom_util, $prenom_util, $mail_util,
                $mdp_util, 1);
                //création du token
                $util->setTokenUtil(md5($mail_util)); 
                //récupération d'un compte utilisateur en BDD
                $testMail = $util->getUtilByMail($bdd);
                //test existence de l'utilisateur (éviter les doublons)
                if($testMail == null){
                    //test si admin
                    if(isset($_POST['id_role'])){
                        //set id_role à 2
                        $util->setIdRole(2);
                    }
                    //paramètre cout (nbr de tour de l'algo de hash)
                    $options = [
                        'cost' => 12,
                    ];
                    //hasher le mot de passe
                    $mdp_util = password_hash($mdp_util, PASSWORD_BCRYPT, $options);
                    //set du password hash
                    $util->setMdpUtil($mdp_util);                    
                    //insertion du compte en BDD
                    $util->createUtil($bdd);
                    //Variables pour envoi du mail de confirmation
                    //récupération du token
                    $hash = $util->getTokenUtil();
                    $userMail = $mail_util;
                    $subject = utf8_decode("Vérification de votre compte secu");
                    $emailMessage = "<a href='http://localhost/secu/activate?id=$hash'>
                    Activer votre compte utilisateur</a>";
                    //envoi du mail d'activation
                    $util->sendMail2($userMail, $subject, $emailMessage,
                    $login_smtp, $mdp_smtp);
                    //message de confirmation
                    $message = "<br>Le compte $name_util à été ajouté";
                }
                //test sinon l'utilisateur existe déja
                else{
                    $message = "Le compte existe déja";
                }
                
            }
            //test sinon mot de passe ne correspondent pas
            else{
                $message = "Les mots de passe de correspondent pas";
            }
        }
        else{
            $message = "Veuillez compléter tous les champs";
        }
    }
    //test non cliqué
    else{
        $message = "Veuillez compléter le formulaire et cliquer sur ajouter";
    }
    echo $message;
?>