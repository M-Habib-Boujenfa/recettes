<?php

/**
 * Objet représentant une Recette
 */
class RecetteController
{
    /**
     * identifiant unique de la recette
     *
     * @var int
     */
    private $id;

    /**
     * Nom de la recette
     *
     * @var string
     */
    private $titre;

    /**
     * Ingredient composant la recette
     *
     * @var string
     */
    private $ingredient;

    /**
     * préparation de la recette
     *
     * @var string
     */
    private $preparation;

    // Méthode propriété id
    public function getId(): int
    {
        return $this->id;
    }

    // Méthode propriété titre
    public function setTitre(string $titre): void
    {
        $this->titre = $titre;
    }

    public function getTitre(): string
    {
        return $this->titre;
    }

    // Méthode propriété ingredient
    public function setIngredient(string $ingredient): void
    {
        $this->ingredient = $ingredient;
    }

    public function getIngredient(): string
    {
        return $this->ingredient;
    }

    // Méthode propriété préparation
    public function setPreparation(string $preparation): void
    {
        $this->preparation = $preparation;
    }

    public function getPreparation(): string
    {
        return $this->preparation;
    }

    /**
     * @todo methode ajouter une recette
     */

    public function ajouterUneRecette(): void
    {
        /**
         * @todo faire les vérifications de sécurité pour les inputs au niveau des $_POST
         */
        $recette = new RecetteController;
        $recette->setTitre(strip_tags($_POST["titre"]));
        $recette->setIngredient(strip_tags($_POST["ingredient"]));
        $recette->setPreparation(strip_tags($_POST["preparation"]));
        require_once("model/RecetteModele.php");
        $recetteModele = new RecetteModele;
        $recetteModele->ajouterUneRecette($recette->getTitre(), $recette->getIngredient(), $recette->getPreparation());
    }

    public function getRecettes(): array
    {
        require_once("model/RecetteModele.php");
        $recetteModele = new RecetteModele;
        return $recetteModele->getRecettes();
    }

    public function getRecette(int $id): object
    {
        require_once("model/RecetteModele.php");
        $recetteModele = new RecetteModele;
        return $recetteModele->getRecette($id);
    }

    public function modifierRecette(int $id)
    {
        $titre = strip_tags($_POST["titre"]);
        $ingredient = strip_tags($_POST["ingredient"]);
        $preparation = strip_tags($_POST["preparation"]);
        require_once("model/RecetteModele.php");
        $recetteModele = new RecetteModele;
        $recetteModele->modiferRecette($id, $titre, $ingredient, $preparation);
    }

    public function supprimerRecette(int $id)
    {
        require_once("model/RecetteModele.php");
        $recetteModele = new RecetteModele;
        $recetteModele->supprimerRecette($id);
    }

    public function recherche(string $rechercher): array
    {
        require_once("model/RecetteModele.php");
        $recetteModele = new RecetteModele;
        $resultatRecherche = $recetteModele->recherche($rechercher);
        return $resultatRecherche;
    }
}
