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

    public function getRecettes(): array
    {
        $db = new DB;
        $recettes = $db::connexion()->prepare("SELECT * FROM plat ORDER BY id DESC");
        $recettes->execute();
        return $recettes->fetchAll(PDO::FETCH_OBJ);
    }

    public function getRecette(int $id): object
    {
        $db = new DB;
        $recettes = $db::connexion()->prepare("SELECT * FROM plat WHERE id= $id");
        $recettes->execute();
        return $recettes->fetch(PDO::FETCH_OBJ);
    }

    public function modiferRecette(int $id, string $titre, string $ingredient, string $preparation)
    {
        $recette = DB::connexion()->prepare("UPDATE plat SET titre = '$titre', ingredient = '$ingredient', preparation = '$preparation' WHERE id = $id");
        $recette->execute();
    }

    public function supprimerRecette(int $id)
    {
        $recette = DB::connexion()->prepare("DELETE FROM plat WHERE id = $id");
        $recette->execute();
    }
}
