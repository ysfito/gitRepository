<?php
header('sessions.php');?>
<html  >
    <form method="post" action="Calculatrice.php">
        <p><label>Nombre1</label><input type="number_format" name="nbr1"> </p>
        <p><label>Nombre2</label><input type="number_format" name="nbr2"></p>
        <p><label>Opérateur</label> 
        <select name="select"style="180px"> 
            <option value="">Selectionner un opérateur</option>
            <option value="+">Addition</option>
            <option value="-">Soustraction</option>
            <option value="*">Multiplication</option>
            <option value="/">Division</option>
            <option value="%">Reste</option>
             </select>
        </p>
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         <input type="submit" value="Calculer">
    </form>
<?php 


if (isset($_POST["Calculer"])){
    extract ($_POST);
    if ($choix=="") {
        $message=="Veuillez  sélectionner un opérateur";
    }
    elseif ($choix=="+") {
        $message==("$nbr1 $choix $nbr2 =") (nbr1+nbr2);
        echo" la somme vaut $message";
    }
}
include("deconnexion.php");
?>
</html>