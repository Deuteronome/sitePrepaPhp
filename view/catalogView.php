<!DOCTYPE html>

<html>

    <?php 
        require("../modules/head.php");
    ?>

    <body>
        <?php
            require("../modules/nav.php");
            require("../modules/header.php");
            require("../modules/popup.php");
            ?>
            
            <div class="genreMenu">
                <?php
                foreach($genreList as $genre) {
                    echo("
                        <form method='post' action='./catalog.php'>
                            <input type='hidden' name='genre' value='".$genre['nom']."'/>
                            <input class='genreBut' type='submit' value='".$genre['nom']."'/>
                        </form>
                    ");
                }
                ?>

            </div>
            
            
            <div class="catalog">
                <div class="tableau">
                    <div class="entete titreLivre">Titre</div>
                    <div class="entete auteurLivre">Auteur</div>
                    <div class="entete genreLivre">Genre</div>
                    <div class="entete dateLivre">Année</div>
                    <div class="entete pagesLivre">Pages</div>
                    <div class="entete detailLivre">Détail</div>
                    <?php
                    foreach($bookList as $book) {
                        echo ("<div class='corp titreLivre'>".$book['titre']."</div>");
                        echo ("<div class='corp auteurLivre'>".$book['auteur']."</div>");
                        echo ("<div class='corp genreLivre'>".$book['genre']."</div>");
                        echo ("<div class='corp dateLivre'>".$book['date']."</div>");
                        echo ("<div class='corp pagesLivre'>".$book['nombre_pages']."</div>");
                        echo ("<div class='detailLivre'>SB</div>");
                    }
                    ?>

                </div>
            </div>
        ?>
    </body>
</html>