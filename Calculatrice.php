<?php
    session_start();
    if (!$_SESSION['admin']) {
        header('location: connexion.php');
    }
?>
<!DOCTYPE html>
<html lang="fr">
<meta charset="utf-8">

<head>
    <title>CALCULATRICE</title>
</head>
<body>
    <center>
        <img src="maths.jpeg" />
        <h1>CALCULATRICE PHP:</h1>
        <table style="border:2px solid green ">
            <form method="POST" action="Calculatrice.php">
                <tr>
                    <td><label for "num">Saisissez le premier nombre :</label></td>
                    <td><input type="number" name="n1" placeholder="Premier nombre " required="required " /></td>
                </tr>
                <tr>
                    <td><label for "opera ">Saisissez le second nombre</label></td>
                    <td><input type="number" name="n2" placeholder="Second nombre" required="required " /></td>
                </tr>
                <tr>
                    <td><label for "opera ">Choisissez un opérateur :</label></td>
                    <td><select name="operateurs" width="70 " id="operateurs">
                    <option value="">Selectionnez un operateur</option>
                    <option value="1">+</option>
                    <option value="2">-</option>
                    <option value="3">/</option>
                    <option value="4">*</option>
                    <option value="5">%</option>
                </select>
                    </td>
                </tr>
                <tr>
                    <td><input type="submit" value="Calculer" name="submit"/></td>
                    <td><input type="reset" value="Annuler" /></td>
                </tr>
            </form>
        </table><br>
        <form method="POST" action="Calculatrice.php">
            <input type="submit" name="deconnexion" value="deconnexion">
       </form><br>
        <div class="button">
        <a href="log1.php" > <button type="submit" name="conec">Retour</button></a>
    </div>
    </center>

    <!--code php-->
    <?php
    extract($_POST);
    $result;
    if (isset($_POST['deconnexion'])) {
    session_destroy();
    header('location: connexion.php');
    }

    if(isset($submit)){
        switch($operateurs) {
            case "":
                echo "Choisissez un opérateur";
            break;
            case 1:
                $result = $n1 + $n2;
            break;
            case 2:
                $result = $n1 - $n2;
            break;
            case 3:
            if($n2!==0){
                $result = $n1 / $n2;
            } 
             break;  
             case 4:
                $result = $n1 * $n2;
             break;
             case 5:
                $result = $n1 % $n2;
             break; 
        }
        echo "<p>Resultat: donne $result </p>"; 
}
?>
    

</body>

</html>