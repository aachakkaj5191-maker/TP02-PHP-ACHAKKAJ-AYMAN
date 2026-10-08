# TP 02 - Programmation Web 2

**Année universitaire :** 2026/2027  
**Nom :** ACHAKKAJ  
**Prénom :** AYMAN  
**Groupe :** GROUPE 4

## Présentation

Ce dépôt contient les solutions des dix exercices du TP 02 sur les bases de PHP : affichage, variables, calculs, types, conditions, boucles, tableaux et formulaires.

## Lancement

1. Ouvrir le dossier du projet dans VS Code.
2. Démarrer le serveur PHP dans le terminal : `php -S localhost:8000`.
3. Ouvrir `http://localhost:8000/index.php` dans le navigateur.

Sous Windows avec XAMPP : `& "C:\xampp\php\php.exe" -S localhost:8000` dans PowerShell.

## Exercices

| Exercice | Fichier | Sujet |
|---|---|---|
| 01 | `ex01.php` | HTML, balises PHP, commentaires et echo |
| 02 | `ex02.php` | Variables et concaténation |
| 03 | `ex03.php` | Constantes et calcul de TVA |
| 04 | `ex04.php` | Types de données et conversions |
| 05 | `ex05.php` | Conditions et mentions |
| 06 | `ex06.php` | Switch et mois |
| 07 | `ex07.php` | Boucles for |
| 08 | `ex08.php` | While, do-while, break et continue |
| 09 | `ex09.php` | Tableau associatif et foreach |
| 10 | `ex10_get.html`, `ex10_get.php`, `ex10_post.html`, `ex10_post.php` | Formulaires GET et POST |

## Réponses aux questions

**Exercice 2 :** PHP distingue les majuscules et les minuscules dans les noms de variables. `$note` et `$Note` sont donc deux variables différentes. Les noms valides sont `$a`, `$_a`, `$a_a`, `$AAA` et `$a1`. Les noms invalides sont `$a!` (caractère `!` interdit) et `$1a` (un nom ne peut pas commencer par un chiffre).

**Exercice 4 :** Avec `echo`, `false` ne produit aucun caractère, alors que `var_dump(false)` affiche `bool(false)`. Pour `true`, `echo` affiche `1` et `var_dump(true)` affiche `bool(true)`. La conversion de `15.8` en entier donne `15`.

**Exercice 5 :** Tests effectués : `-1` → Note invalide ; `9` → Non validé ; `10` → Passable ; `12` → Assez bien ; `14` → Bien ; `16` → Très bien ; `21` → Note invalide.

**Exercice 6 :** `1` → Janvier ; `3` → Mars ; `12` → Décembre ; `15` → Numéro de mois invalide. Le mois courant est récupéré avec `date("m")`.

**Exercice 8 :** La boucle `while` s'exécute zéro fois car la condition est fausse dès le début. La boucle `do-while` s'exécute une fois car elle teste la condition après l'exécution.

**Exercice 9 :** Somme = 60, moyenne = 12/20, 4 étudiants ont validé. La meilleure note est celle de Sara : 16/20.

**Exercice 10 :** Avec GET, les valeurs sont visibles dans l'URL après le `?`, par exemple `ex10_get.php?nom=...&prenom=...&groupe=G1`. Avec POST, les données sont envoyées dans le corps de la requête HTTP et ne sont pas ajoutées à l'URL. Les deux scripts vérifient la présence des champs, les valeurs vides et l'appartenance du groupe à G1, G2, G3 ou G4. Les données affichées sont échappées avec `htmlspecialchars()`.

## Remise

Le lien public du dépôt GitHub doit être remis sur Google Classroom. Les fichiers sont destinés à être exécutés localement avec PHP.
