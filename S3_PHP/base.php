<?php
    $dbLink=mysqli_connect(dbHost,dbLogin,dbPass)or die('Erreurdeconnexionauserveur:'.mysqli_connect_error());
?>

<?
    phpmysqli_select_db($dbLink,dbBd)or die('Erreurdanslasélectiondelabase:'.mysqli_error($dbLink));
?>

<?php
    $query='SELECTid,email,dateFROMuser';
?>
