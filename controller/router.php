<?php

@$page = $_GET["page"];

switch ($page) {
    case 'accueil':
        include_once("vue/accueil.php");
        break;

    default:
        include_once("vue/accueil.php");
        break;
}
