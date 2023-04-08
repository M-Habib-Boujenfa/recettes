<?php

@$page = $_GET["page"];

switch ($page) {
    case 'accueil':
        include_once("vue/accueil.php");
        break;
    case 'ajoutRecette':
        if (
            isset($_POST["titre"], $_POST["ingredient"], $_POST["preparation"])
            && !empty($_POST["titre"]) && !empty($_POST["ingredient"]) && !empty($_POST["preparation"])
        ) {
            require_once("controller/RecetteController.php");
            $recette = new RecetteController;
            $recette->ajouterUneRecette();
        }
        include_once("vue/formRecette.php");
        break;
    case 'afficherRecettes':
        require_once("controller/RecetteController.php");
        $recettes = new RecetteController;
        $allRecettes = $recettes->getRecettes();
        require_once("vue/recettes.php");
        break;
    default:
        include_once("vue/accueil.php");
        break;
}
