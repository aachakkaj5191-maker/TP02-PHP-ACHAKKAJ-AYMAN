<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 09 - TP 02 PHP</title>
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
    <h1>Exercice 9 : Tableaux associatifs et foreach</h1>
    <?php
    $notes = [
        "Amine" => 12,
        "Sara" => 16,
        "Youssef" => 8,
        "Lina" => 14,
        "Adam" => 10
    ];
    $somme = 0;
    $nombreValides = 0;
    $meilleureNote = -1;
    $meilleurEtudiant = "";
    ?>
    <table>
        <tr><th>Étudiant</th><th>Note / 20</th><th>Résultat</th></tr>
        <?php foreach ($notes as $etudiant => $note): ?>
            <tr>
                <td><?= htmlspecialchars($etudiant, ENT_QUOTES, 'UTF-8') ?></td>
                <td><?= $note ?></td>
                <td><?= $note >= 10 ? 'Validé' : 'Non validé' ?></td>
            </tr>
            <?php
            $somme += $note;
            if ($note >= 10) {
                $nombreValides++;
            }
            if ($note > $meilleureNote) {
                $meilleureNote = $note;
                $meilleurEtudiant = $etudiant;
            }
            ?>
        <?php endforeach; ?>
    </table>
    <?php $moyenne = $somme / count($notes); ?>
    <p>Somme des notes : <?= $somme ?></p>
    <p>Moyenne de la classe : <?= $moyenne ?>/20</p>
    <p>Étudiants ayant validé : <?= $nombreValides ?></p>
    <p>Meilleure note : <?= $meilleureNote ?>/20 (<?= htmlspecialchars($meilleurEtudiant, ENT_QUOTES, 'UTF-8') ?>)</p>
    <p><a href="index.php">Retour à l'accueil</a></p>
</body>
</html>
