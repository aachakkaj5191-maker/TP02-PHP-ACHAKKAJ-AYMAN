<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 02 - TP 02 PHP</title>
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
    <h1>Exercice 2 : Variables et concaténation</h1>
    <?php
    $nom = "El Amrani";
    $prenom = "Amine";
    $age = 20;
    $formation = "Développement informatique";

    $presentation = "Je m'appelle " . $prenom . " " . $nom . ", j'ai " . $age . " ans et je suis en " . $formation . ". ";
    $presentation .= "J'apprends PHP";

    $note = 12;
    $Note = 16;
    echo "<p>" . htmlspecialchars($presentation, ENT_QUOTES, 'UTF-8') . "</p>";
    echo "<p>Valeur de note : " . $note . "</p>";
    echo "<p>Valeur de Note : " . $Note . "</p>";
    ?>
    <p><a href="index.php">Retour à l'accueil</a></p>
</body>
</html>
