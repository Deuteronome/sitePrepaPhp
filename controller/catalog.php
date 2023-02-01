<?php

    require("../model/model.php");

    $titrePage = "choisissez votre livre!";
    $titreOnglet= "Catalogue";
    $menu = [
        ["label"=>"Accueil", "lien"=>"../controller/home.php"],
        ["label"=>"Catalogue", "lien"=>"../controller/catalog.php"]/*,
        ["label"=>"Mon compte", "lien"=>"../controller/account.php"]*/
    ];

    $bdd= connectDB();
    $bookList = getBookList($bdd);

    var_dump($bookList);
    
    require("../view/catalogView.php");
?>

