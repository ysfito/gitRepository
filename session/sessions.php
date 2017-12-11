<?php
session_start();
$sid="user" || "admin";
session_id($sid);

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
    </head>
    <body>
    <form action="" method="post">
<fieldset>
    <legend>Session</legend>
    <span>Pseudo</span><input type="text" name="pseudo"> <br/>
    <span>Mot de passe</span><input type="password" name="password"><br/>
    <select name="sid">
        <option value="">Profil</option>
        <option value="user">User</option>
        <option value="admin">Admin</option>
    </select><br/>
              <input type="submit" name="connexion" value="connexion">
</fieldset>
    </form>
    </body>
</html>
    <?php
 if (isset($_POST["connexion"])) {
     extract($_POST);
     if ($sid=="") {
         echo 'veuillez choisir un profil';
     }
     elseif ($sid=="user") {
        if ($pseudo=="user" && $password=="user") {

           header("location:liens.php");

        }
        elseif ($pseudo=="admin" && $password=="admin") {
            echo"Vous n'avez pas les droits requis";
        }
        else {
            echo"Pseudo ou password incorrect";
        }

    }

     elseif ($sid=="admin") {
         if ($pseudo=="admin" && $password=="admin") {

            header("location:lien1s.php");
         }
        elseif ($pseudo=="user" && $password=="user") {
            echo"Vous n'avez pas les droits requis";
        }
        else {
            echo"Pseudo ou password incorrect";
        }
     }
 }

?>
