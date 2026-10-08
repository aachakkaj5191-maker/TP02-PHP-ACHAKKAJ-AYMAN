<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 05 - TP 02 PHP</title>
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
    <h1>Exercice 5 : Conditions if / elseif / else</h1>
    <?php
    // On teste toutes les valeurs demandées dans le TP.
    $valeursATester = [-1, 9, 10, 12, 14, 16, 21];
    echo '<table><tr><th>Moyenne</th><th>Résultat</th></tr>';
    foreach ($valeursATester as $moyenne) {
        if ($moyenne < 0 || $moyenne > 20) {
            $message = "Note invalide";
        } elseif ($moyenne < 10) {
            $message = "Non validé";
        } elseif ($moyenne < 12) {
            $message = "Passable";
        } elseif ($moyenne < 14) {
            $message = "Assez bien";
        } elseif ($moyenne < 16) {
            $message = "Bien";
        } else {
            $message = "Très bien";
        }
        echo "<tr><td>$moyenne</td><td>$message</td></tr>";
    }
    echo '</table>';
    ?>
    <p><a href="index.php">Retour à l'accueil</a></p>
</body>
</html>
