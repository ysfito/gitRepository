<?php
    session_start();
    if (!$_SESSION['admin']) {
        header('location: connexion.php');
    }
    else{
        $date = date("d-m-y");
        $heure = date("h:i");
        print("nous somme le $date ---- il est $heure a DAKAR. <br />");
        echo '<br /> <h3>Bienvenue a loginInfo:</h3> <br />';
        if (isset($_POST['deconnexion'])) {
            session_destroy();
            header('location: connexion.php');
        } 
    }
    
?>

<!DOCTYPE html>
<html lang="fr">
<body>
    
    <a href="tablo.php">aller sur tableau</a><br /><br />
    <a href="Calculatrice.php">aller sur calcul</a><br /><br />
    <form method="POST" action="log1.php">
        <input type="submit" name="deconnexion" value="deconnexion">
    </form>
</body>
</html>