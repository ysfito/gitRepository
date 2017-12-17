<?php
    session_start();
    if (!$_SESSION['admin']) {
        header('location: connexion.php');
    }
 if (isset($_POST['deconnexion'])) {
    session_destroy();
    header('location: connexion.php');
    }

echo("<center><img src='../html/index.jpeg' height='300' width='1200' ></center>
    <center><form method='post'>FORMULAIRE <br/>");
echo("<h1>Bienvenue User</h1>");
echo ("<a href='exo9.php'>lien vers exercice9</a> <br/>");
echo ("<a href='exo10.php'>lien vers exercice10</a><br/>");
echo("<a href='deco .php'><button type='button'>Déconnexion</button></a>");
?>
