<?php
// Vérification du formulaire avant la récupération des valeurs.
$envoye = $_SERVER['REQUEST_METHOD'] === 'GET';
$donnees = $envoye ? $_GET : [];
$message = '';
if (!$envoye) {
    $message = 'Veuillez remplir le formulaire avant de consulter cette page.';
} elseif (!isset($donnees['nom'], $donnees['prenom'], $donnees['groupe'])) {
    $message = 'Tous les champs sont obligatoires.';
} else {
    $nom = trim($donnees['nom']);
    $prenom = trim($donnees['prenom']);
    $groupe = trim($donnees['groupe']);
    if ($nom === '' || $prenom === '' || $groupe === '') {
        $message = 'Tous les champs sont obligatoires.';
    } elseif (!in_array($groupe, ['G1', 'G2', 'G3', 'G4'], true)) {
        $message = 'Groupe invalide.';
    } else {
        $nom = htmlspecialchars($nom, ENT_QUOTES, 'UTF-8');
        $prenom = htmlspecialchars($prenom, ENT_QUOTES, 'UTF-8');
        $groupe = htmlspecialchars($groupe, ENT_QUOTES, 'UTF-8');
        $message = "Bienvenue $prenom $nom, vous appartenez au groupe $groupe.";
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Résultat du formulaire GET</title>
</head>
<body>
    <h1>Résultat - GET</h1>
    <p><?= $message ?></p>
    <p><a href="ex10_get.html">Retour au formulaire</a></p>
    <p><a href="index.php">Accueil</a></p>
</body>
</html>
