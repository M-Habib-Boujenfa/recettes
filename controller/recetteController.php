<?php

class recetteController
{
    private $id;
    private $titre;
    private $ingredient;
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
}
