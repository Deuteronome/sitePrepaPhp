<?php
  
  function connectDB() {
    try
        {
            $bdd = new PDO('mysql:host=localhost:3307;dbname=livres_e2c;charset=utf8', 'root', 'root');
        }
        catch(Exception $e)
        {
            die('Erreur : '.$e->getMessage());
        }

        return $bdd;
  }

  function getBooksList($bdd) {
    $sqlQuery ="SELECT * FROM principal";
    $logStatement = $bdd -> prepare($sqlQuery);
    $logStatement -> execute();
    $req = $logStatement -> fetchAll();

    return $req;
  }
?>