<h1><?= $recette->titre ?></h1>

<p>ingrédient : <?= $recette->ingredient ?></p>
<p> préparation : <?= $recette->preparation ?></p>

<p>
    <a href="?page=ajoutRecette&id=<?= $recette->id ?>">Modifier la recette</a>
</p>
<p>
    <a href="?page=supprimerRecette&id=<?= $recette->id ?>">Supprimer la recette</a>
</p>