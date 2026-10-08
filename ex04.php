<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 04 - TP 02 PHP</title>
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
    <h1>Exercice 4 : Types et conversions</h1>
    <?php
    $entier = 42;
    $chaine = "42";
    $decimal = 15.8;
    $vrai = true;
    $faux = false;
    $vide = null;

    echo '<h2>Types des variables</h2><pre>';
    var_dump($entier, $chaine, $decimal, $vrai, $faux, $vide);
    echo '</pre>';

    $chaineEnEntier = (int) $chaine;
    $decimalEnEntier = (int) $decimal;
    $entierEnChaine = (string) $entier;
    echo '<h2>Conversions</h2><pre>';
    var_dump($chaineEnEntier, $decimalEnEntier, $entierEnChaine);
    echo '</pre>';

    echo '<h2>Affichage des booléens</h2>';
    echo '<p>true avec echo : [' . $vrai . ']</p>';
    echo '<p>false avec echo : [' . $faux . ']</p>';
    echo '<pre>';
    var_dump($vrai, $faux);
    echo '</pre>';

    echo '<h2>Conversions en booléen</h2><pre>';
    var_dump((bool) 0, (bool) "0", (bool) "PHP", (bool) []);
    echo '</pre>';
    ?>
    <p><a href="index.php">Retour à l'accueil</a></p>
</body>
</html>
