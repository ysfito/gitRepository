<?php 
    session_start();
    if (!$_SESSION['user']) {
        header('location: connexion.php');
    }
    if (isset($_POST['deconnexion'])) {
            session_destroy();
            header('location: connexion.php');
    }
    $date = date("d-m-y");
    $heure = date("h-i");
    print("nous somme le $date ---- il est $heure a DAKAR.<br />  <br />");


    $liste_perso = array(
        array (1001,'omar', 12),
        array (1002, 'sandangobi', 27),
        array (1003, 'adama', 20)
    );
    if(isset($_GET['Modifier']))
    {
        extract($_GET);
        for($i=0; $i<3; $i++)
        {
            if($code==$liste_perso[$i][0])
            {
                $liste_perso[$i][1]=$nom;
                $liste_perso[$i][2]=$age;
            }
        }
        echo"<table border='1' width='600'>";
        echo"
            <tr>
                <td>CODE</td>
                <td>NOM</td>
                <td>AGE</td>
                
            </tr>
        ";
        for($i=0; $i<3; $i++)
        {
            echo'
                <tr>
                    <td>'.$liste_perso[$i][0].'</td>
                    <td>'.$liste_perso[$i][1].'</td>
                    <td>'.$liste_perso[$i][2].'</td>
                    <td><a style="text-decoration:none;color: red;" href="url_02.php?code='.$liste_perso[$i][0].'&amp;nom='.$liste_perso[$i][1].'&amp;age='.$liste_perso[$i][2].'">Editer</a></td>
                </tr>
            ';
        }
    }
    else
    {
        echo"<table border='1' width='600'>";
        echo"
            <tr>
                <td>CODE</td>
                <td>NOM</td>
                <td>AGE</td>
                
            </tr>
        ";
        for($i=0; $i<3; $i++)
        {
            echo'
                <tr>
                    <td>'.$liste_perso[$i][0].'</td>
                    <td>'.$liste_perso[$i][1].'</td>
                    <td>'.$liste_perso[$i][2].'</td>
                    </tr>
                    <td><a style="text-decoration:none;color: red;" href="url_02.php?code='.$liste_perso[$i][0].'&amp;nom='.$liste_perso[$i][1].'&amp;age='.$liste_perso[$i][2].'">Editer</a></td>
            ';
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <br /><div class="button">
        <a href="log2.php" > <button type="submit" name="conec">Retour</button></a>
    </div>
    <form method="POST" action="url_01.php">
        <input type="submit" name="deconnexion" value="deconnexion">
    </form>
</body>
</html>