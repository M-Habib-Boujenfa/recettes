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

    public function ajouterUneRecette()
    {
        /**
         * @todo faire les vérifications de sécurité pour les inputs au niveau des $_POST
         */
        $recette = new RecetteController;
        $recette->setTitre($_POST["titre"]);
        $recette->setIngredient($_POST["ingredient"]);
        $recette->setPreparation($_POST["preparation"]);
        require_once("model/RecetteModele.php");
        $recetteModele = new RecetteModele;
        $recetteModele->ajouterUneRecette($recette->getTitre(), $recette->getIngredient(), $recette->getPreparation());
    }
}
