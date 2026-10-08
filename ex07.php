<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 07 - TP 02 PHP</title>
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
    <h1>Exercice 7 : Boucles for</h1>
    <?php $nombre = 7; ?>
    <h2>Table de multiplication de <?= $nombre ?></h2>
    <?php
    for ($i = 1; $i <= 10; $i++) {
        echo "<p>$nombre × $i = " . ($nombre * $i) . "</p>";
    }
    ?>
    <h2>Pyramide de six lignes</h2>
    <pre><?php
    for ($ligne = 1; $ligne <= 6; $ligne++) {
        for ($etoile = 1; $etoile <= $ligne; $etoile++) {
            echo '*';
        }
        echo "
";
    }
    ?></pre>
    <p><a href="index.php">Retour à l'accueil</a></p>
</body>
</html>
