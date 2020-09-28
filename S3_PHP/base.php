<?php
    $dbLink=mysqli_connect(dbHost,dbLogin,dbPass)or die('Erreurdeconnexionauserveur:'.mysqli_connect_error());
?>

<?
    phpmysqli_select_db($dbLink,dbBd)or die('Erreurdanslasélectiondelabase:'.mysqli_error($dbLink));
?>

<?php
    $query='SELECTid,email,dateFROMuser';
?>

<?php
    if(!($dbResult=mysqli_query($dbLink, $query))){
        echo'Erreurderequête<br/>';
        //Afficheletyped'erreur.
        echo'Erreur:'.mysqli_error($dbLink).'<br/>';
        //Affichelarequêteenvoyée
        echo'Requête:'.$query.'<br/>';
        exit();
    }
?>

<?php
    while($dbRow=mysqli_fetch_assoc($dbResult))
    {
        echo$dbRow['id'].'<br/>';
        echo$dbRow['email'].'<br/>';
        echo$dbRow['date'].'<br/>';
        echo'<br/><br/>';
        echo date('d.m.Y',strtotime($dbRow['date']));
    }
?>
