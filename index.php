<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>TP 02 - Programmation Web 2</title>
</head>
<body>
    <h1>TP 02 - PHP</h1>
    <p>Programmation Web 2 - Année universitaire 2026/2027</p>
    <h2>Liste des exercices</h2>
    <ul>
        <?php for ($i = 1; $i <= 9; $i++): ?>
            <li><a href="<?= sprintf('ex%02d.php', $i) ?>">Exercice <?= $i ?></a></li>
        <?php endfor; ?>
        <li><a href="ex10_get.html">Exercice 10 - Formulaire GET</a></li>
        <li><a href="ex10_post.html">Exercice 10 - Formulaire POST</a></li>
    </ul>
</body>
</html>
