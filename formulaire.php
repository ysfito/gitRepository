<?php
    session_start();
    if (!$_SESSION['user']) {
        header('location: connexion.php');
    }
    if (isset($_POST['deconnexion'])) {
            session_destroy();
            header('location: connexion.php');
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>formulaire</title>
    </head>

    <body>
        <br />
        <h1>Mon formulaire</h1><br />			      
        <form action="formulaire.php" method="post">
            <br />Nom :<input type="text" name="nom"><br /><br />
           
            <input type="radio" name="civilite" value="Masculin">Masculin
            <input type="radio" name="civilite" value="femine">Feminie<br />
			
            <input type="checkbox" name="choix" value="Fooball">Football
            <input type="checkbox" name="choixs" value="Basket">Basket
            <input type="checkbox" name="choixe" value="Natation">Natation<br /><br />
            <div>
                Commentaire:<br />
                <textarea type="text" name="com"></textarea><br /><br />
            </div>
            <div class="button">
                <button type="submit" name="Valider">Valider</button>
            </div><br /><br>
            <input type="submit" name="deconnexion" value="deconnexion">
            
        </form>
            <div class="button">
                <a href="log2.php" > <button type="submit" name="conec">Retour</button></a>
            </div>
    </body>
</html> 
