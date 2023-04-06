<?php

/**
 * Objet permettant d'effecteur des actions en base de donnée avec une recette
 */
class RecetteModele
{

    /**
     * Ajouter une recette en base de donnée
     *
     * @param string $titre
     * @param string $ingredient
     * @param string $preparation
     * @return void
     */
    public function ajouterUneRecette(string $titre, string $ingredient, string $preparation): void
    {
        $db = new DB;
        $recette = $db::connexion()->prepare("INSERT INTO plat (`titre`, `ingredient`, `preparation`) VALUES (:titre, :ingredient, :preparation)");
        $recette->bindValue(":titre", $titre, PDO::PARAM_STR);
        $recette->bindValue(":ingredient", $ingredient, PDO::PARAM_STR);
        $recette->bindValue(":preparation", $preparation, PDO::PARAM_STR);
        $recette->execute();
    }
}
