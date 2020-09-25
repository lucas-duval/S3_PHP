<!DOCTYPE html>
<html lang="fr">
<head>
    <?php
    $var1 = 6;
    $var2 = 1.3;
    $var3 = 'Variable 3';
    ?>
    <link rel="icon" href="img/images.png" sizes="16x16">
    <link id="main-stylesheet" rel="stylesheet" href="css/style.css"/>
    <title>Accueil</title>
    <meta name="description" content="Page d'accueil et presentation de Lucas Duval">
    <meta name="keywords" content="Lucas, Duval, IUT, Informatique, accueil, présentation">
    <meta name="author" content="Lucas Duval">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
</head>
<body>
<img src="img/amu.png" alt="Logo AMU" width="460" height="150">
<a href="#top" class="bouton">Haut</a>
<h2>Mon site web</h2>
<p>Je suis Lucas Duval et je vous présente mon site web</p>
<ul>
    <li><a href="index.html">Accueil</a></li>
    <li><a href="html/mestravaux.html">Mon travail</a></li>
    <li><a href="html/coordonnees.html">Coordonnées</a></li>
    <li id="theme-button"><a>Changer de thème</a></li>
</ul>
<h1>
    Accueil
</h1>
<div class="desc">
    <?php echo "$var1 + $var2"; ?>
    <?php echo $var1 + $var2; ?>
    <?php echo $var1 + $var3; ?>
</div>
<div class="desc1">
    Pour déposer votre avis sur le site, veuillez suivre le formulaire ci-dessous:<br><br>
    <form action="mailto:lucas.duval@etu.univ-amu.fr" method="post" enctype="text/plain">
        Nom :<br>
        <input type="text" name="firstname">
        <br><br>
        Prénom :<br>
        <input type="text" name="lastname">
        <br><br>
        Votre avis sur le site en quelques mots :
        <br>
        <textarea class="taille" name="message"></textarea>
        <br><br>
        <input type="submit" value="Envoyer le formulaire">
    </form>
</div>
<script src="javascript/index.js"></script>
</body>
</html>