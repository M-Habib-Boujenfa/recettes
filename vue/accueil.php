<h1>Accueil</h1>
<?php
if (isset($_POST["recherche"])) {
    foreach ($resultatRecherche as  $recette) : ?>
        <article>
            <h2><a href="?page=afficherRecettes&id=<?= $recette->id ?>"><?= $recette->titre ?></a></h2>
        </article>
    <?php
    endforeach;
} else {
    foreach ($allRecettes as $recette) : ?>
        <article>
            <h2><a href="?page=afficherRecettes&id=<?= $recette->id ?>"><?= $recette->titre ?></a></h2>
        </article>
<?php
    endforeach;
}
