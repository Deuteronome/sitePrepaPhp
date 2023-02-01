<?php
    session_start();

    require("../model/model.php");

    $titrePage = "choisissez votre livre!";
    $titreOnglet= "Catalogue";
    $menu = [
        ["label"=>"Accueil", "lien"=>"../controller/home.php"],
        ["label"=>"Catalogue", "lien"=>"../controller/catalog.php"]/*,
        ["label"=>"Mon compte", "lien"=>"../controller/account.php"]*/
    ];

    $bdd= connectDB();
    $genreList = getGenreList($bdd);

    if(isset($_POST['genre'])) {
        $bookList = getBookByGenre($bdd, $_POST['genre']);
    } else {
        $bookList = getBookList($bdd);
    }    
    
    require("../view/catalogView.php");
?>

