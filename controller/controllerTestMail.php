<?php
    include './id_smtp.php';
    include './model/modelUtilisateur.php';
    include './manager/managerUtilisateur.php';
    include './utils/connectBdd.php';
    include './vue/viewEnvoiMail.php';
    $message = "";
    if(isset($_POST['mail'])){
        $test = new ManagerUtil(null, null, null, null, null);
        /* $userEmail = 'mathieu.mith@laposte.net'; */
        $userEmail = "mathieu.mith@laposte.net";
        $subject = utf8_decode("Test mail envoyé depuis PHP");
        $emailMessage =  "PHP mailer Projet secu<br>
        Mathieu";
        $test->sendMail2($userEmail, $subject, $emailMessage, $login_smtp, $mdp_smtp);
        $message = "mail envoyé";
    }
    else{
        $message = "Cliquer pour envoyer un mail";
    }
    echo $message;
?>