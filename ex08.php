<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 08 - TP 02 PHP</title>
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
    <h1>Exercice 8 : Boucles while, do-while, continue et break</h1>
    <h2>1. Nombres pairs de 0 à 20</h2>
    <p>
    <?php
    $nombre = 0;
    while ($nombre <= 20) {
        if ($nombre == 10) {
            echo "<strong>$nombre</strong> ";
        } else {
            echo "$nombre ";
        }
        $nombre += 2;
    }
    ?>
    </p>
    <h2>2. Comparaison while / do-while</h2>
    <?php
    $compteur = 5;
    $executionsWhile = 0;
    while ($compteur < 5) {
        $executionsWhile++;
        $compteur++;
    }
    $compteur = 5;
    $executionsDoWhile = 0;
    do {
        $executionsDoWhile++;
        $compteur++;
    } while ($compteur < 5);
    echo "<p>while : $executionsWhile exécution(s)</p>";
    echo "<p>do-while : $executionsDoWhile exécution(s)</p>";
    ?>
    <h2>3. continue et break</h2>
    <p>
    <?php
    for ($i = 1; $i <= 20; $i++) {
        if ($i == 16) {
            break;
        }
        if ($i % 3 == 0) {
            continue;
        }
        echo "$i ";
    }
    ?>
    </p>
    <p><a href="index.php">Retour à l'accueil</a></p>
</body>
</html>
