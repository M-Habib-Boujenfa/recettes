<?php
if (isset($uneRecette)) : ?>
    <h1>Modifier une recette</h1>
<?php
else : ?>
    <h1>Ajouter une recette</h1>
<?php
endif; ?>


<form action="" method="post">

    <article>
        <label for="titre">Nom de la recette</label>
        <input type="text" name="titre" id="titre" value="<?= @$uneRecette->titre ?>">
    </article>

    <article>
        <label for="ingredient">Ingrédients</label>
        <textarea name="ingredient" id="ingredient" cols="30" rows="10"><?= @$uneRecette->ingredient ?></textarea>
    </article>

    <article>
        <label for="preparation">Instruction de préparation</label>
        <textarea name="preparation" id="preparation" cols="30" rows="10"><?= @$uneRecette->preparation ?></textarea>
    </article>

    <?php
    if (isset($uneRecette)) : ?>
        <button type="submit">Modifier la recette </button>
    <?php
    else : ?>
        <button type="submit">Ajouter une recette</button>
    <?php
    endif; ?>
</form>