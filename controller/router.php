<?php

@$page = $_GET["page"];

switch ($page) {
    case 'accueil':
        require_once("controller/RecetteController.php");
        $recettes = new RecetteController;
        $allRecettes = $recettes->getRecettes();
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
            //header("Location: vue/ajoutRecetteReussi.php");
        }
        include_once("vue/formRecette.php");
        break;
    case 'afficherRecettes':
        require_once("controller/RecetteController.php");
        $recettes = new RecetteController;
        /**
         * @todo afficher Une recette par rapport a son ID
         */
        $allRecettes = $recettes->getRecettes();
        require_once("vue/recettes.php");
        break;
    default:
        require_once("controller/RecetteController.php");
        $recettes = new RecetteController;
        $allRecettes = $recettes->getRecettes();
        include_once("vue/accueil.php");
        break;
}
