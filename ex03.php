<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 03 - TP 02 PHP</title>
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
    <h1>Exercice 3 : Constantes et calculs</h1>
    <?php
    define("TAUX_TVA", 20);
    define("DEVISE", "MAD");
    $prixUnitaireHT = 60;
    $quantite = 3;
    $totalHT = $prixUnitaireHT * $quantite;
    $montantTVA = $totalHT * TAUX_TVA / 100;
    $totalTTC = $totalHT + $montantTVA;
    $montantFinal = $totalTTC;
    $montantFinal += 15;
    ?>
    <table>
        <tr><th>Détail</th><th>Montant</th></tr>
        <tr><td>Prix unitaire HT</td><td><?= $prixUnitaireHT . ' ' . DEVISE ?></td></tr>
        <tr><td>Quantité</td><td><?= $quantite ?></td></tr>
        <tr><td>Total HT</td><td><?= $totalHT . ' ' . DEVISE ?></td></tr>
        <tr><td>TVA (<?= TAUX_TVA ?> %)</td><td><?= $montantTVA . ' ' . DEVISE ?></td></tr>
        <tr><td>Total TTC</td><td><?= $totalTTC . ' ' . DEVISE ?></td></tr>
        <tr><td>Livraison</td><td>15 MAD</td></tr>
        <tr><td>Montant final</td><td><?= $montantFinal . ' ' . DEVISE ?></td></tr>
    </table>
    <p>La constante TAUX_TVA <?= defined('TAUX_TVA') ? 'existe' : "n'existe pas" ?>.</p>
    <p><a href="index.php">Retour à l'accueil</a></p>
</body>
</html>
