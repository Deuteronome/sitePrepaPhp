<?php
    session_start();

    $titrePage = "Bienvenue à l'E2C";
    $titreOnglet= "Accueil";
    $menu = [
        ["label"=>"Accueil", "lien"=>"../controller/home.php"],
        ["label"=>"Catalogue", "lien"=>"../controller/catalog.php"]
    ];

    require("../view/homeView.php");
?>


