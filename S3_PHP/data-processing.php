<?php
    $ident = $_POST['ident'];
    $civilite = $_POST['civ'];
    $mail = $_POST['mail'];
    $mdp = $_POST['mdp'];
    $mdpverif = $_POST['mdpv'];
    $telephone = $_POST['tel'];
    $pays = $_POST['pays'];
    $conditions = $_POST['cdtgnr'];
    $action = $_POST['action'];

    $to = 'ryuk.duv@gmail.com';
    $from= 'ryuk.duv@gmail.com';
    $reply= 'lucas.duval@etu.univ-amu.fr';
    $subject= 'Test mail';
    $bndary= md5(uniqid(mt_rand()));

    $headers = 'From: Name <' . $from. '>'. "\n";
    $headers .= 'Return-Path: <'. $reply. '>'. "\n";
    $headers .= 'Content-type: multipart/alternative; boundary="' . $bndary. '"';

    $message = 'Voici vos identifiants d\'inscription :' . PHP_EOL
    .$message = 'Email : ' . $mail . PHP_EOL
    .$message = 'Mot de passe : ' . PHP_EOL . $mdp;
    if ($action == 'mailer')
    {
        if (isset($ident, $civilite, $mail, $mdp, $mdpverif, $telephone, $pays, $conditions, $action))
        {
            echo 'id', $ident, ', civilité', $civilite, ', mail', $mail, ', mot de passe', $mdp, ', vérification du mot de', $mdpverif, ', tel', $telephone, ', pays', $pays, ', conditions générales', $conditions, ', bouton', $action;
            var_dump($headers);
            mail($to, $subject, $message, $headers);
            echo 'Le mail a bien été envoyé !';
        }
    }
    else
    {
        echo '<br/><strong>Bouton non géré !</strong></br>';
    };
?>