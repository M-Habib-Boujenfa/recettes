<?php

@$page = $_GET["page"];

switch ($page) {
    case 'accueil':
        require_once("controller/RecetteController.php");
        $recettes = new RecetteController;
        if (isset($_POST["recherche"])) {
            $resultatRecherche =  $recettes->recherche($_POST["recherche"]);
        } else {
            $allRecettes = $recettes->getRecettes();
        }
        include_once("vue/accueil.php");
        break;
    case 'ajoutRecette':
        if (
            isset($_POST["titre"], $_POST["ingredient"], $_POST["preparation"])
            && !empty($_POST["titre"]) && !empty($_POST["ingredient"]) && !empty($_POST["preparation"]) && !isset($_GET["id"])
        ) {
            require_once("controller/RecetteController.php");
            $recette = new RecetteController;
            $recette->ajouterUneRecette();
            //header("Location: vue/ajoutRecetteReussi.php");
        }
        if (
            isset($_POST["titre"], $_POST["ingredient"], $_POST["preparation"])
            && !empty($_POST["titre"]) && !empty($_POST["ingredient"]) && !empty($_POST["preparation"]) && isset($_GET["id"])
        ) {
            require_once("controller/RecetteController.php");
            $recette = new RecetteController;
            $recette->modifierRecette($_GET["id"]);
        }
        if (empty($_POST["titre"]) && empty($_POST["ingredient"]) && empty($_POST["preparation"]) && isset($_GET["id"])) {
            require_once("controller/RecetteController.php");
            $recette = new RecetteController;
            $uneRecette = $recette->getRecette($_GET["id"]);
        }
        include_once("vue/formRecette.php");
        break;
    case 'afficherRecettes':
        require_once("controller/RecetteController.php");
        $recettes = new RecetteController;
        if (isset($_GET["id"])) {
            $recette =  $recettes->getRecette($_GET["id"]);
            require_once("vue/recette.php");
        } else {
            $allRecettes = $recettes->getRecettes();
            require_once("vue/recettes.php");
        }
        break;
    case "supprimerRecette":
        require_once("controller/RecetteController.php");
        $recettes = new RecetteController;
        $recettes->supprimerRecette($_GET["id"]);
        break;
    default:
        require_once("controller/RecetteController.php");
        $recettes = new RecetteController;
        if (isset($_POST["recherche"])) {
            $resultatRecherche =  $recettes->recherche($_POST["recherche"]);
        } else {
            $allRecettes = $recettes->getRecettes();
        }
        include_once("vue/accueil.php");
        break;
}
