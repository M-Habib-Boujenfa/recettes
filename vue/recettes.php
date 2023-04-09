<?php

foreach ($allRecettes as $recette) : ?>
    <article>
        <h2><a href="?page=afficherRecettes&id=<?= $recette->id ?>"><?= $recette->titre ?></a></h2>
    </article>
<?php
endforeach;
