<?php
   session_start();
    if (!$_SESSION['user']) {
        header('location: connexion.php');
    }
 if (isset($_POST['deconnexion'])) {
    session_destroy();
    header('location: connexion.php');
    }

echo("<center><img src='../html/index.jpeg' height='300' width='1200' ></center><center><form method='post'>FORMULAIRE <br/>");
echo("<h1>Bienvenue admin</h1>");
echo ("<a href='exo7.php'>lien vers exercice7</a> <br/>");
echo ("<a href='exo8.php'>lien vers exercice8</a><br/>");
echo("<a href='deco.php'><button type='button'>Déconnexion</button></a>");

?>
