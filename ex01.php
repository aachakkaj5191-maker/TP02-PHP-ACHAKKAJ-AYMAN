<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 01 - TP 02 PHP</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 35px auto; max-width: 760px; line-height: 1.6; }
        table { border-collapse: collapse; width: 100%; }
        th, td { border: 1px solid #aaa; padding: 7px 10px; text-align: left; }
        pre { background: #f1f1f1; padding: 12px; }
        a { color: #14579a; }
        input, select { margin: 5px 0 12px; padding: 7px; }
    </style>
</head>
<body>
    <h1>Exercice 1 : Introduction à PHP</h1>
    <?php
    // Affichage du message de bienvenue
    echo "<p>Bienvenue dans mon TP PHP</p>";
    /*
       Les informations suivantes sont fictives.
       Chaque information est affichée sur une ligne.
    */
    echo "<p>Nom : El Amrani</p>";
    echo "<p>Prénom : Amine</p>";
    echo "<p>Groupe : G1</p>";
    ?>
    <p><?= "C'est mon premier exercice en PHP." ?></p>
    <p><a href="index.php">Retour à l'accueil</a></p>
</body>
</html>
