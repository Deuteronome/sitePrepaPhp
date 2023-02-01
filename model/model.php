<?php

    function connectDB () {

        try {
            $bdd = new PDO('mysql:host=localhost:3307;dbname=livres_e2c;charset=utf8', 'root', 'root');
        }
        catch(Exception $e) {
            die('erreur : '.$e->getMessage());
        }
        
        return $bdd;
    }

function getBookList($bdd) {
    $sqlQuery = "SELECT * FROM principal";
    $logStatement = $bdd->prepare($sqlQuery);
    $logStatement->execute();
    $req = $logStatement->fetchAll();

    return $req;
}

function getGenreList($bdd) {
    $sqlQuery = "SELECT nom FROM genres";
    $logStatement = $bdd->prepare($sqlQuery);
    $logStatement->execute();
    $req = $logStatement->fetchAll();

    return $req;
}

function getBookByGenre($bdd, $genre) {
    $sqlQuery = "SELECT * FROM principal WHERE genre = :genre";
    $logStatement = $bdd->prepare($sqlQuery);
    $logStatement->execute([
        'genre' => $genre
    ]);
    $req = $logStatement->fetchAll();

    return $req;
}

?>