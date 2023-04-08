<h1>Accueil</h1>
<?php
foreach ($allRecettes as $recette) : ?>
    <article>
        <h2><a href="?page=afficherRecettes&id=<?= $recette->id ?>"><?= $recette->titre ?></a></h2>
        <p><?= $recette->ingredient ?></p>
        <p><?= $recette->preparation ?></p>
    </article>
<?php
endforeach;
