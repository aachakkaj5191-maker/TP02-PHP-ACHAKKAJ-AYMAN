<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 06 - TP 02 PHP</title>
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
    <h1>Exercice 6 : Choix du mois avec switch</h1>
    <?php
    function nomMois(int $numeroMois): string
    {
        switch ($numeroMois) {
            case 1: return "Janvier";
            case 2: return "Février";
            case 3: return "Mars";
            case 4: return "Avril";
            case 5: return "Mai";
            case 6: return "Juin";
            case 7: return "Juillet";
            case 8: return "Août";
            case 9: return "Septembre";
            case 10: return "Octobre";
            case 11: return "Novembre";
            case 12: return "Décembre";
            default: return "Numéro de mois invalide";
        }
    }
    $numeroMois = 3;
    echo "<p>Valeur initiale ($numeroMois) : " . nomMois($numeroMois) . "</p>";
    echo '<h2>Tests</h2>';
    foreach ([1, 3, 12, 15] as $numeroMois) {
        echo "<p>$numeroMois : " . nomMois($numeroMois) . "</p>";
    }
    $numeroMois = (int) date("m");
    echo "<h2>Mois actuel du serveur</h2><p>" . nomMois($numeroMois) . "</p>";
    ?>
    <p><a href="index.php">Retour à l'accueil</a></p>
</body>
</html>
