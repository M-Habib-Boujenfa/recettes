<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $titre ?? "Liste de recettes" ?></title>
</head>

<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.php?page=accueil">Accueil</a></li>
                <li><a href="index.php?page=ajoutRecette">Ajouter une recette</a></li>
                <li><a href="index.php?page=afficherRecettes">Toutes les recettes</a></li>
            </ul>
        </nav>
    </header>
    <main>